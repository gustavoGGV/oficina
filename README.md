# Cinco sites para uma oficina de UI/UX

Cinco páginas independentes em **HTML, CSS, JavaScript e Bootstrap 5.3.3**, cada página inicial com um hero e um formulário, além de telas próprias de login e administração. Todo o conteúdo está em português. Marcas, produtos, eventos, datas e experiências são fictícios.

## Abra e escolha

Abra `index.html` no navegador para ver o catálogo, ou abra diretamente o `index.html` de uma das pastas. **Não precisa instalar dependências, iniciar servidor ou ter internet.** Bootstrap e ilustrações SVG estão incluídos localmente. O catálogo é apenas um índice; não faz parte dos cinco sites.

| Pasta | Tema | Identidade visual | Tarefa do usuário |
| --- | --- | --- | --- |
| [site-custom-1](site-custom-1/index.html) | Margem · livraria | Editorial, creme e vinho, tipografia serifada | Reservar livros para retirada |
| [site-custom-2](site-custom-2/index.html) | RUÍDO · moda urbana | Preto e lima, tipografia pesada, formulário horizontal | Escolher cor, tamanho e quantidade de camisetas |
| [site-custom-3](site-custom-3/index.html) | PULSO · festival | Roxo noturno e pêssego, formulário em formato de ingresso | Reservar ingressos de uma categoria |
| [site-custom-4](site-custom-4/index.html) | Vereda · ecoturismo | Verdes suaves, paisagem e cantos arredondados | Escolher trilha, data e número de participantes |
| [site-custom-5](site-custom-5/index.html) | Grão · oficina de café | Laranja e creme, composição de revista | Escolher oficina e turma para uma pessoa |

Cada pasta pode ser copiada e distribuída separadamente. Não há arquivos compartilhados obrigatórios entre os cinco sites.

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

**Não há backend, cobrança, reserva efetiva, envio de e-mail ou armazenamento de dados.** Use nomes e e-mails fictícios. A espera de 500 ms permite observar o carregamento durante a atividade. O conteúdo digitado é exibido com `textContent`.

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

## Continuação: segurança

O JavaScript é uma demonstração de interface. Quem controla o navegador pode alterar campos, preços e regras. Um backend real precisaria validar opções e quantidades e recalcular os valores a partir de dados confiáveis. A observação pode servir para discutir a diferença entre mostrar texto e interpretá-lo como HTML. Esta coleção não implementa essa etapa de servidor.

## Recuperar a versão inicial

O arquivo `originais-oficina.zip` contém a versão entregue dos cinco sites, o catálogo e este guia. Extraia-o em outra pasta para comparar ou recuperar um arquivo sem sobrescrever o trabalho das duplas.

## Verificação desta entrega

Foram conferidos sintaxe de JavaScript e CSS, estrutura dos formulários, associações entre campos e rótulos, arquivos locais, SVGs e cálculos das combinações de opções. A revisão em navegador não foi executada: o ambiente restringiu a execução e a autorização para iniciar o servidor local foi recusada. As regras responsivas estão implementadas, mas a aparência final em cada dispositivo ainda precisa de inspeção no navegador.


## Login e administração

Todos os temas agora têm `login.html` e `admin.html`. O ícone de perfil na barra superior abre o login de usuários. Um botão separado, “Admin”, abre diretamente a administração; os dois acessos estão nas três páginas de cada tema. As páginas reutilizam o Bootstrap, as fontes, as cores e as ilustrações locais de cada tema.

- `login.html`: e-mail, senha, botão para mostrar/ocultar a senha e login demonstrativo de usuários. Ao continuar, a navegação retorna à página inicial, sem conceder acesso administrativo nem criar uma sessão. Não verifica credenciais; os campos podem ficar vazios. Nenhum valor é enviado ou armazenado.
- `admin.html`: acesso direto e livre, resumo de registros, busca por nome/e-mail/item/número, filtro por status e confirmação visual de registros fictícios. Recarregar restaura os dados iniciais.
- `account.css`: estilos das telas de conta e do ícone de perfil. Mantém cada pasta independente.
- `account.js`: navegação demonstrativa, exibição de senha, filtros e atualização visual do painel.

O formulário da página inicial permanece independente: suas reservas simuladas não alimentam o painel. Autenticação, autorização, integração com MySQL e persistência serão implementadas no backend em uma etapa futura. Nenhuma das vulnerabilidades discutidas para a oficina foi adicionada nesta etapa.

Para integrar o login real, os comentários no HTML indicam onde conectar o backend. Os campos de login estão sem `name` para evitar que as credenciais sejam enviadas na URL na navegação demonstrativa, inclusive se o JavaScript estiver desativado.
