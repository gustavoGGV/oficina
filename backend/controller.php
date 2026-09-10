<?php
declare(strict_types=1);
require_once __DIR__ . '/core.php';
lab_local_only();
try {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (($_GET['action'] ?? '') === 'lab-key') {
            header('Content-Type: application/javascript; charset=utf-8');
            header('Cache-Control: no-store');
            header('X-Content-Type-Options: nosniff');
            // FALHA 5 — GRÃO: um segredo do servidor é entregue ao JavaScript público.
            echo 'window.OFICINA_SIGNING_KEY = ' . json_encode($site === 5 && lab_vulnerable($site) ? lab_key($site) : null, JSON_THROW_ON_ERROR) . ';';
            exit;
        }
        $user = lab_identity($site);
        lab_json(['user' => $user, 'can_admin' => lab_can_admin($site, $user), 'unsafe_error_html' => $site === 4 && lab_vulnerable($site)]);
    }
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') lab_json(['message' => 'Método não permitido.'], 405);
    if (!str_starts_with(strtolower($_SERVER['CONTENT_TYPE'] ?? ''), 'application/json')) lab_json(['message' => 'Envie JSON.'], 415);
    $body = json_decode(file_get_contents('php://input', false, null, 0, 4097), true, 16, JSON_THROW_ON_ERROR);
    if (!is_array($body)) lab_json(['message' => 'Corpo inválido.'], 400);
    if (($body['action'] ?? '') === 'logout') {
        lab_cookie($site, '', true);
        lab_json(['ok' => true]);
    }
    if (($body['action'] ?? '') !== 'login') lab_json(['message' => 'Ação não encontrada.'], 400);
    if (!is_string($body['email'] ?? null) || !is_string($body['password'] ?? null)) lab_json(['message' => 'Informe e-mail e senha.'], 400);
    $email = trim($body['email']);
    $user = lab_login($site, $email, $body['password']);
    if (!$user) {
        // FALHA 4 — VEREDA: mensagem será inserida como HTML pelo login, sem escape.
        $unsafe = $site === 4 && lab_vulnerable($site);
        lab_json(['message' => $unsafe ? 'Não foi possível entrar com: ' . $email : 'E-mail ou senha incorretos.', 'unsafe_error_html' => $unsafe], 401);
    }
    lab_cookie($site, lab_token($site, (int)$user['id']));
    lab_json(['user' => $user]);
} catch (JsonException $e) {
    lab_json(['message' => 'JSON inválido.'], 400);
} catch (Throwable $e) {
    // Não expõe SQL, credenciais ou detalhes da conexão nos erros.
    lab_json(['message' => 'Não foi possível processar o acesso. Confira a instalação do laboratório.'], 503);
}
