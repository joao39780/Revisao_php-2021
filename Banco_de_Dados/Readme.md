# Lembrando de informações: banco de dados
<code><img height="50" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/php/php.png"></code>
<code><img height="50" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/mysql/mysql.png"></code>

## Conectando-se a um programa de banco de dados
Para estabelecer uma conexão com um programa de banco de dados, crie um novo objeto PDO. Você passará para o construtor do PDO uma string descrevendo o banco de dados com o qual
está se conectando, e ele retornará um objeto que será usado no resto de seu programa na troca de informações com o programa de banco de dados.

O Exemplo8.1 mostra uma chamada a new PDO() que conecta a um banco de dados chamado restaurant em um servidor MySQL sendo executado em db.example.com, com o nome de usuário 
penguim e a senha top^hat.
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.1.php">Exemplo8.1</a></code>

A string passada com primeiro argumento para o construtor de PDO é chamada de nome da fonte de dados (DSN, data source name). Ela começa com um prefixo indicando com que tipo de 
programa de banco de dados ocorrerá a conexão, depois vem dois pontos (:), e então pares chave=valor separados por ponto e vírgula fornecendo informações sobre como se conectar.
Se a conexão com o banco de dados precisar de um nome de usuário e senha, eles serão passados como o segundo e terceiro argumentos para o construtor do PDO.

Os pares chave=valor específicos que poderão ser inseridos em um DNS dependerão do tipo de programa de banco de dados com o qual você estiver se conectando. Embora o engine PHP
possa se conectar a muitos banco de dados com PDO. essa conectividade tem que ser ativada quando o engine é construído e instalado no servidor. Se aparecer uma mensagem could not
find drive na criação de um objeto PDO, isso significa que sua instalação do engine PHP não incorpora o suporte ao banco de dados que você está tentando usar.

A tabela 8.1 lista os prefixos e opções de DNS para alguns programas de banco de dados mauis populares que trabalham com PDO
![image](https://user-images.githubusercontent.com/80215258/136456761-2dbc5888-7e96-4305-bcac-47e233b94fa2.png)

Como visto no Exemplo8.1, as opções de DNS host e port especificam o host e a porte de rede do servidor do banco de dados, específica como o banco de dados deve manipular 
caracteres não pertecentes ao idioma inglês.

Se tudo der certo com o construtor new PDO(), ele retornará um objeto que você usará para interagir com o banco de dados. Se houver um problema na conexão, será lançada uma 
PDOException. Certifique-se de capturar exceções que possam ser lançadas pelo construtor do PDO para verificar se a conexão foi bem-sucedida antes de proseguir em seu programa.
O Exemplo8.2 mostra como fazê-lo.
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.2.php">Exemplo8.2</a></code>

No Exemplo8.2, se o construtor do PDO lançar uma exceção, o código que estiver dentro do bloco try após a chamada a new PDO() não será executado. Em vez disso, o engine PHP 
pulará para o bloco catch, onde uma mensagem de erros será exibida.

Suponhamos que admin2 fosse a senha errada para o usuário admin. Nesse caso, o Exemplo8.2 exibiria algo como:

    Couldn't connect to the databaseSQLSTATE[HY000] [1045] Access denied for user 'admin2'@'localhost' (using password: YES)

## Criando uma tabela
Antes de poder inserir ou recuperar qualquer dado em uma tabela de banco de dados, você deve criar a tabela. Geralmente essa é uma operação que se executa uma única vez. Só 
precisamos pedir ao programa de banco de dados que crie uma nova tabela uma única vez. O programa PHP que usa a tabela poderá fazer leituras ou gravações nela sempre que for
executado sem precisar recriá-la. Se uma tabela de banco de dados é como uma planilha, então, cria uma tabela é como criar o arquivo de uma nova planilha. Após criar o arquivo,
você pode abri-lo várias vezes fazer leituras ou alterações.

O comando SQL para a criação de uma tabela é CREATE TABLE. É preciso fornecer o nome da tabela e os nomes e tipos de todas as colunas. O Exemplo8.3 mostra o comando SQL que cria
a tabela dishes mostrada na figura8.1.

    CREATE TABLE dishes(
        dish_id INTEGER PRIMARY KEY,
        dish_name VARCHAR(255),
        price DECIMAL(4,2),
        is_spicy INT
        )

Para criar realmente a tabela, você precisa enviar o comando CREATE TABLE para o banco de dados. Após conectar-se com new PDO(), use a função exec() para enviar o comando como
mostrado no Exemplo8.3
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.3.php">Exemplo8.3</a></code>

A próxma seção explicará exec com mais detalhes. A chamada a $db->setAttribute() no Exemplo8.3 assegura que PDO lançe exceções se houver problemas com as consultas e não apenas
quando houver problemas na conexão. A manipulação de erros com o PDO também sera discutida na próxima seção.

O oposto de CREATE TABLE é DROP TABLE. Ele remove uma tabela e os dados existentes nela de um banco de dados. O Exemplo8.5 mostra a sintaxe de uma consulta que remove a tabela dishes.
    
    DROP TABLE dishes

Uma vez que você remover a tabela, ela desaparecerá definitivamente, logo, tome cuidado com DROP TABLE!

## Inserindo dados no banco de dados
Supondo que a conexão seja bem-sucedida, o objeto retornado por new PDO() dará acesso aos dados de seu banco de dados. Chamar as funções desse objeto permitirá que você envie
consultas para o programa de banco de dados e acesse os resultados. Para inserir alguns dados no banco de dados, passe uma instrução INSERT para o método exec() do objeto, como
mostrado no Exemplo8.6
