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

A resposta à primeira solicitação é algum HTML para um formulário. A figura7.2 mostra o que o navegador exibe quando recebe essa resposta.

![image](https://user-images.githubusercontent.com/80215258/149013554-de0b0dfc-0278-45d9-af58-22a02dc9678d.png)

A resposta à segunda solicitação é o resultado do processamento dos dados do formulário enviado. A figura7.3 mostra a saída quando o 
formulário é enviado com Susannah digitação na caixa de texto.

![image](https://user-images.githubusercontent.com/80215258/149014033-253039aa-04de-47b6-89d5-a3b5244728d4.png)

## Variáveis de servidor úteis

Além de de **PHP_SELF** e **REQUEST_METHOD**, o array autoglobal **$_SERVER_** contém vários elementos úteis que fornecem informações 
sobre o servidor web e a solicitação atual. A tabela7.1 lista alguns deles.

|Elemento      |Exemplo                  |
|------------- |-------------------------|
| QUERY_STRING | category=kitchen&price=5|
| PATH_INFO    | /browse                 |
| SERVER_NAME  | www.example.com         |
| DOCUMENT_ROOT| /usr/local/htdocs       |
| REMOTE_ADDR  | 175.56.28.3             |
| REMOTE_HOST  | pool0560.cvx.dialup.net |


## Acessando parâmetros de formulário
No início de cada pedido, o mecanismo PHP configura alguns arrays autoglobais que contêm valores de quaisquer parâmetros enviados em um formulário ou passados na URL. 
Os parâmetros de URL e de formulário do método **GET** são colocados em arrays **<code>$_GET</code>**. Os parâmetros de formulário do método **POST** são colocados em
arrays  **<code>$_POST</code>**.

A URL http://www.example.com/catalog.php?product_id=21&category=fryingpan coloca dois valores em **<code>$_GET</code>**:

-  **<code>$_GET['product_id']</code>** está configurado para **21**
-  **<code>$_GET['category']</code>** está configurado para **fryingpan**

O envio do formulário no exemplo7.2 faz com que os mesmos valores sejam colocados em **<code>$_POST</code>**, supondo que 21 seja inserido na caixa de texto e Frying Pan
selecionado no menu.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Formularios_web/Exemplo7.2/Exemplo7.2.php">Exemplo7.2</a></code>

O Exemplo7.3 incorpora o formulário do Exemplo7.2 em um programa PHP completo que imprime os valores apropriados de **<code>$_POST</code>** depois de exibir o formulário.
Como o atributo **action** da tag **FORM** no Exemplo7.3 é **catalog.php**, você precisa salvar o programa em um arquivo chamado **catalog.php** em seu servidor web. Se você 
salvá-lo em um arquivo com o nome diferente, ajuste o atributo action apropriadamente.


 <code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Formularios_web/Exemplo7.3.php">Exemplo7.3</a></code>

Um elemento de formulário que tenha vários valores precisa de um nome que termine em []. Isso iformará ao engine PHP que ele deve tratar os valores como elementos de um array.
Os valores do menu select que estão sendo enviados no Exemplo7.4 foram inseridos em <code>$_POST['lunch']</code>.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Formularios_web/Exemplo7.4.php">Exemplo7.4</a></code>

Se o formulário do Exemplo7.4 for enviado com as opções **Chicken Bun** e **Bird-Nest Bun** selecionadas, <code>$_POST['lunch']</code> será um array de dois elementos com os
valores chicken e nest. Você pode acessar esses valores usando a sintaxe comum dos arrays multidimensionais. O Exemplo7.5 incorpora o formulário do Exemplo7.4 a um programa
completo que exibe cada valor selecionado no menu. 

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Formularios_web/Exemplo7.5.php">Exemplo7.5</a></code>

Com **chicken Bun** e **bird-nest bun** selecionados no menu, o Exemplo7.5 exibirá
(após o formulário):
    
    Selected buns:
    You want a chicken bun.
    You want a nest bun.

Podemos considerar que um elemento chamado lunch[] será convertido no código PHP a seguir quando o formulário for enviado (supondo que os valores enviados no elemento sejam
chicken e nest):

    $_POST['lunch'][] = 'chicken';
    $_POST['lunch'][] = 'nest';

Como vimos no Exemplo4.6, essa sintaxe adiciona um elemento ao fim do array.

# Processamento de formulários com funções
O formulário básico do Exemplo7.7 pode ficar mais flexível  se inserirmos o código de exibição e o código de processamento em funções separadas. O Exemplo7.6 é uma versão do
Exemplo7.6 com funções.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Formularios_web/Exemplo7.6.php">Exemplo7.6</a></code>

Para alterar o formulário ou o que ocorre quando ele é enviado, é so mudar o corpo de process_form() ou show_form().

Dividir o processamento e a exibição do formulário em funções também facilita adicionar um estágio de validação de dados. A validação de dados, abordada com detalhes em 
"validação de dados", é uma parte essencial de qualquer aplicativo web que aceite entradas provinientes de um formulário. Os dados devem ser validados após o formulário ser
enviados, porém isso precisa ocorrer antes dele ser processado. O Exemplo7.7 adiciona uma função de validação ao Exemplo7.6.
