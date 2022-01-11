# Capítulo 7. Trocando informações com Usuários: Criando formulários da Web

O processamento de formulários é um componente essencial de quase qualquer aplicativo da web. Os formulário são como os usuários se comunicam com 
seu servidor:inscrevendo-se para uma nova conta, pesquisando em um fórum todas as postagens sobre um determinado assunto, recuperando uma senha 
perdida, encontrando um restaurante ou sapateiro próximo ou comprando um livro.

Usar um formulário em um programa PHP é uma atividade de duas etapas. O primeiro passo é exibir o formulário. Isso envolve a construção HTML que 
tenha tags para os elementos apropriados da interface do usuário, como caixas de texto, caixas de seleção e botões.

Quando um usuário vê uma página com um formulário, ele insere as informações solicitadas no formulário e clica em um botão ou pressiona Enter para 
enviar as informações do formulário de volta ao seu servidor. O processamento das informações do formulário enviado é a etapa dois da operação.

O Exemplo 7.1 é uma página que diz "Olá" para um usuário. Se a página for carregada em resposta a um envio de formulário, ela exibirá uma saudação.
Caso contrário, a página exibe um formlário com o qual um usuário pode enviar seu nome.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Formularios_web/Exemplo7.1.php">Exemplo7.1</a></code>

A figura 7.1 mostra a comunição cliente e servidor necessária para exibir e processar o formulário no exemplo7.1. O primeiro par 
de solicitação e resposta faz com que o navegador exiba o formulário. No segundo par de solicitação e resposta, o servidor processa os dados do formulário
enviado e o navegador exibe os resultados.

![image](https://user-images.githubusercontent.com/80215258/148846121-aeab65df-175b-4f26-b2e6-7cc6024f07e7.png)
