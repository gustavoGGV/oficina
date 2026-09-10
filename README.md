# Cinco sites para uma oficina de UI/UX

Cinco páginas independentes em **HTML, CSS, JavaScript e Bootstrap 5.3.3**, cada página inicial com um hero e um formulário, além de telas próprias de login e administração. Todo o conteúdo está em português. Marcas, produtos, eventos, datas e experiências são fictícios.

## Abra e escolha

Abra `index.html` no navegador para ver o catálogo, ou abra diretamente o `index.html` de uma das pastas. **As páginas visuais usam recursos locais; login e administração exigem Apache + PHP + MySQL.** Veja [backend/README.md](backend/README.md) para configurar o banco e criar as três contas. Bootstrap e ilustrações SVG estão incluídos localmente. O catálogo é apenas um índice; não faz parte dos cinco sites.

| Pasta | Tema | Identidade visual | Tarefa do usuário |
| --- | --- | --- | --- |
| [site-custom-1](site-custom-1/index.html) | Margem · livraria | Editorial, creme e vinho, tipografia serifada | Reservar livros para retirada |
| [site-custom-2](site-custom-2/index.html) | RUÍDO · moda urbana | Preto e lima, tipografia pesada, formulário horizontal | Escolher cor, tamanho e quantidade de camisetas |
| [site-custom-3](site-custom-3/index.html) | PULSO · festival | Roxo noturno e pêssego, formulário em formato de ingresso | Reservar ingressos de uma categoria |
| [site-custom-4](site-custom-4/index.html) | Vereda · ecoturismo | Verdes suaves, paisagem e cantos arredondados | Escolher trilha, data e número de participantes |
| [site-custom-5](site-custom-5/index.html) | Grão · oficina de café | Laranja e creme, composição de revista | Escolher oficina e turma para uma pessoa |

Para distribuir o login funcional, copie a pasta `backend` junto dos cinco temas. As páginas visuais mantêm seus próprios estilos e ilustrações.

## Onde customizar

```text
site-custom-N/
├── index.html                 # Textos, hero, campos e opções do formulário
├── style.css                  # Variáveis de aparência + estilos responsivos
├── script.js                  # CONFIG, validação, resumo e confirmação
└── assets/
    ├── bootstrap.min.css      # Bootstrap local, com licença preservada
    └── *.svg                  # Ilustrações editáveis
```

- **Cores, fontes e bordas:** edite `:root` no início de `style.css`. Os comentários `PERSONALIZE`, `HERO`, `FORMULÁRIO` e `DESAFIO` indicam outros pontos de partida. Algumas cores das ilustrações e superfícies estão nos blocos de estilo específicos ou nos SVGs.
- **Conteúdo e campos:** edite `index.html`. Preserve os `id`, `name`, `aria-describedby` e as referências entre rótulos e campos enquanto aprende o fluxo. Campos novos precisam de um `id` próprio, um `<label for="...">` e um elemento `.invalid-feedback` com id `id-do-campo-error`.
- **Opções e valores:** edite `CONFIG` no início de `script.js` e as opções correspondentes do HTML. As chaves de `CONFIG.options` precisam corresponder ao `value` de cada opção. Mantenha os preços mencionados no hero e nas opções alinhados com a configuração.
- **Feedback:** experimente os textos de `data-required`, de `validateField()` e da confirmação no evento `submit`.
- **Ilustrações:** abra os SVGs como texto para alterar cores e formas. A camiseta tem três arquivos de cor, selecionados pelo JavaScript.
- **Datas:** as turmas, o festival e as trilhas usam datas fictícias fixas. Atualize-as no HTML para reutilizar o exercício em outra ocasião.

O Bootstrap fornece grid, espaçamentos, campos, botões e alertas. Os estilos de cada tema são carregados depois dele. Não é necessário o JavaScript do Bootstrap, pois não há componentes que dependam dele: o comportamento dos formulários está em JavaScript puro.

## O que já funciona

Os formulários validam campos obrigatórios, nome e formato de e-mail; mostram erros por campo; levam o foco para o primeiro erro; atualizam o total quando as opções mudam; exibem um estado de carregamento e uma confirmação acessível. A confirmação inclui escolhas, quantidade, valor e, quando houver, data, turma, tamanho e observação. Durante a confirmação simulada, os campos ficam desabilitados para manter o resumo consistente e impedir envios duplicados.

A RUÍDO também troca a cor da camiseta ilustrada e tem um guia de tamanhos expansível. A Vereda informa distância, duração e dificuldade ao trocar a trilha.

**Os formulários de reserva não fazem cobrança, reserva efetiva, envio de e-mail ou armazenamento de dados. O login possui backend e usa as contas do MySQL.** Use nomes e e-mails fictícios. A espera de 500 ms permite observar o carregamento durante a atividade. O conteúdo digitado é exibido com `textContent`.

## Atividade de 40 minutos

As páginas são bases funcionais. Os desafios abaixo são sugestões abertas; não há erros de acessibilidade ou falhas de segurança inseridos de propósito. Para começar com uma versão problemática, o docente pode preparar uma cópia antes da aula e alterar, por exemplo, o destaque do total ou o texto da ação principal. Preserve uma cópia funcional para comparação.

| Minutos | Atividade |
| --- | --- |
| 0–3 | Experimente uma página e conclua a tarefa com dados fictícios |
| 3–11 | Discuta UI/UX, hierarquia, clareza e feedback usando a página |
| 11–14 | Em dupla, escolha três dificuldades ou oportunidades de melhoria |
| 14–28 | Altere uma escolha visual, um ponto do formulário e um feedback |
| 28–34 | Outra dupla executa a tarefa sem orientação dos autores |
| 34–38 | Ajuste o principal problema encontrado e justifique as escolhas |
| 38–40 | Use o mesmo formulário para introduzir a discussão de segurança |

### Sugestões por tema

| Tema | Escolha visual | Formulário | Feedback |
| --- | --- | --- | --- |
| Margem | Compare título, capa e preço: o que aparece primeiro? | A quantidade e a retirada estão claras? | A pessoa sabe quando e onde retiraria o livro? |
| RUÍDO | O produto e sua cor escolhida têm destaque suficiente? | É fácil encontrar e usar o guia de tamanhos? | O resumo deixa cor, tamanho e quantidade evidentes? |
| PULSO | Data, local e preço competem com o título? | As diferenças entre categorias são compreensíveis? | A confirmação parece uma reserva ou uma compra? |
| Vereda | A ilustração ajuda a decidir sobre a experiência? | Distância, duração e dificuldade aparecem na hora certa? | A pessoa entende qual trilha e data escolheu? |
| Grão | A promessa e o conteúdo da oficina estão claros? | É fácil comparar turmas e oficinas? | A confirmação comunica os materiais inclusos? |

Entrega sugerida: **problema identificado → mudança feita → resultado observado**. Para testar, tente enviar vazio, digite um e-mail incorreto, corrija os campos, mude uma opção e confira o total. Repita usando apenas o teclado e em uma janela estreita.

## Login compartilhado e segurança

O backend agora atende somente autenticação e controle de acesso aos admins. Reservas, pedidos, inscrições e alterações de status continuam mock, sem banco ou API próprios.

Cada navbar tem acessos separados: o perfil abre `login.html`; Admin abre `admin.php`. Os clientes voltam ao site após entrar. A identidade aparece no topo, com botão Sair. As três contas são compartilhadas entre os temas; cookies e chaves são separados.

Consulte [o guia do backend](backend/README.md) para instalação, contas fictícias, tabela de vulnerabilidades, instruções com Burp e modo corrigido. A configuração padrão contém uma falha principal diferente em cada tema e restringe o backend ao computador local.

| Site | Falha deliberada | Correção |
| --- | --- | --- |
| Margem | SQL Injection no login | Consultas parametrizadas |
| RUÍDO | Cliente acessa administração | Verificação de perfil no servidor |
| PULSO | Assinatura do JWT não verificada | Verificar assinatura e condições de validade |
| Vereda | XSS no erro do login | Mensagem genérica e saída com textContent |
| Grão | Chave de assinatura exposta no JavaScript | Remover a exposição e rotacionar a chave |

## Arquivos de conta

- `login.html`: e-mail, senha, mostrar/ocultar e envio JSON ao login.
- `auth.php`: fixa o tema e chama o controlador compartilhado.
- `admin.php`: verifica identidade e permissão antes de emitir o painel mock.
- `account.css`: estilos de login, painel e navbar.
- `account.js`: filtros e alterações visuais dos registros fictícios.
- `backend/client.js`: login, identificação da conta, logout e mensagens.

O instalador CLI `php backend/install.php` cria duas contas de cliente e uma de administrador no MySQL configurado. Não é uma instalação automática do serviço MySQL; configure o servidor e as credenciais conforme o guia.

## Verificações

Os scripts `tests/login.php` e `tests/http.php` verificam o login, papéis, isolamento entre temas e os resultados esperados nos modos vulnerável e corrigido. As instruções de execução estão no guia do backend.
