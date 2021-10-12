# Lembrando de informações: banco de dados
<code><img height="50" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/php/php.png"></code>
<code><img height="50" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/mysql/mysql.png"></code>

## Conectando-se a um programa de banco de dados
Para estabelecer uma conexão com um programa de banco de dados, crie um novo objeto PDO. Você passará para o construtor do PDO uma string descrevendo o banco de dados com o qual
está se conectando, e ele retornará um objeto que será usado no resto de seu programa na troca de informações com o programa de banco de dados.

O Exemplo8.1. mostra uma chamda a new PDO() que conecta a um banco de dados chamado restaurant em um servidor MySQL.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.1.php">Exemplo8.1</a></code>
  
A string passada como primeiro argumento para o construtor do PDO é chamada de nome da fonte de dados (DSN, data source name). Ela começa com um prefixo indicando com que tipo de
progrma de banco de dados ocorrerá a conexão, depois vem dois pontos (:), e então pares chave=valor separados por ponto e vírgula fornecendo informações sobre como se conectar. Se
A conexão com o banco de dados precisar de um nome de usuário e senha, eles serão passados como segundo e terceiro argumento para o construtor do PDO.

Os pares chave=valor específicos que poderão ser inseridos em um DSN dependerão do tipo de programa de banco de dados com o qual você estiver se conectando. Embora o engine PHP
possa se conectar a muitos banco de dados com o PDO, essa conectividade tem que ser ativada quando o engine é construído de instalado no servidor. Se aperecer uma mensagem 
could not find driver na criação de um objeto PDO, isso significa que sua instalação do engine PHP não incorpora o suporte ao banco de dados que você está tentando usar.

A tabela 8.1 lista os prefixos e opções DSN para alguns dos programas de banco de dados mais populares que trabalham com o PDO.
![image](https://user-images.githubusercontent.com/80215258/136878252-49db72e4-986f-4b8a-aba5-903f09e54a9f.png)

Se tudo der certo com o construtor new PDO(), ele retornará um objeto que você usará para interagir com o banco de dados. Se houver um problema na conexão, será lançada uma 
PDOException. Certifique-se de capturar exceções que possam ser lançadas pelo construtor do PDO para verificar se a conexão foi bem-sucedida antes de prosseguir em seu programa.
O Exemplo8.2 mostra como fazê-lo

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.2.php">Exemplo8.2</a></code>

No Exemplo8.2, se o construtor do PDO lançar uma exceção, o código que estiver dentro do bloco try após a chamada a new PDO() será executado. Em vez disso, o engine PHP pulará 
para o bloco catch, onde uma mensagem de erro será exibida.

Suponhamos que admin fosse a senha errada para o usuário admin. Nesse caso, o Exemplo8.2 exibiria algo como:

	Could not connect to the database: SQLSTATE[HY000] [1045] Access denied for user 'admin'@'localhost' (using password: YES)

## Criando uma tabela
Antes de você pode inserir ou recuperar qualquer dado em uma tabela de banco de dados, você deve criar a tabela. Geralmente essa é uma operação que se executa uma única vez.
So precisamos pedir ao programa de banco de dados que crie uma nova tabela uma vez. O programa PHP que usa a tabela poderá fazer leituras ou gravações nela sempre que for 
executado sem precisar recriá-la. Se uma tabela de banco de dados é como uma nova planilha, então criar uma tabela é como criar o arquivo de uma nova planilha. Após cria o
arquivo, você pode abri-lo várias vezes para fazer leituras ou alterações.

O comando SQL para a criação de uma tabela é CREATE TABLE. É preciso fornecer o nome da tabela e os nomes e tipos de todas as colunas. O Exemplo8.3 mostra o comando SQL que cria
a tabela dishes mostrada na Figura 8.1.

	Exemplo8.3 - Criando a tabela dishes
	
	CREATE TABLE dishes(
		dish_id INTEGER PRIMARY KEY,
		dish_name VARCHAR(255),
		price DECIMAL(4,2),
		is_spicy INT
	)

Para realmente criar a tabela, você precisa enviar o comando CREATE TABLE para o bancod de dados. Após conectar-se com new PDO(), use a função exec() para enviar o comando
como mostrado no Exemplo8.4

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.4.php">Exemplo8.4</a></code>

A próxima seção explicará exec() com mais detalhes. A chamada a $db->setAttribute() no Exemplo8.4 assegura que o PDO lançe exceções se houver problemas com as consultas e não 
apenas quando houver problemas na conexão. A manipulação de erros com PDO também será discutida na próxima seção.

O oposto de CREATE TABLE é o comando DROP TABLE. Ele remover uma tabela e os dados existentes nela de um banco de dados. O Exemplo8.5 mostra a sintaxe de uma consulta que remove
a tabela dishes.

	Exemplo8.5 - Removendo uma tabela
		
		DROP TABLE dishes

Uma vez que você remover a tabela, ela desaparecerá definitivamente, logo, tome cuidade com DROP TABLE!

## Inserindo dados no banco de dados
Supondo que a conexão seja bem-sucedida, o objeto retornado por new PDO() dará acesso aos dados de seu banco de dados. Chamar funções desse objeto permitirá que você enive
consultas para o programa de banco de dados e acesse os resultados. Para inserir alguns dados no banco de dados, passe uma instrução INSERT para o método exec() do objeto, como
mostrado no Exemplo8.6.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.6.php">Exemplo8.6</a></code>

O método exec() retorna o número de linhas afetadas pela instrução SQL que foi enviada para o servidor do banco de dados. Nesse caso, a inserção de uma única linha retorna 1
porque apenas uma linha (a que você inseriu) foi afetada.

Se algo der errado com INSERT, uma exceção será lançada. O Exemplo8.7 tenta executar ma instrução INSERT que tem um nome de coluna inválido. A tabela dishes não contém uma 
coluna chamada dish_size.

Já que a chamada a $db->setAttribute() instrui o PDO a lançar uma exceção sempre que houver um erro, o Exemplo8.7 exibe:

	Couldn't insert a row: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'dish_size' in 'field list'