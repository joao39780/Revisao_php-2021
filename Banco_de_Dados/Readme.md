# Lembrando de informações: banco de dados
<code><img height="50" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/php/php.png"></code>
<code><img height="50" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/mysql/mysql.png"></code>

## Conectando-se a um programa de banco de dados
Para estabelecer uma conexão com um programa de banco de dados, crie um novo objeto PDO. Você passará para o construtor do PDO uma string descrevendo o banco de dados com o qual
você está se conectando, e ele retornará um objeto que será usado no resto de seu programa na troca de informações com o programa de banco de dados.

O Exemplo 8.1 mostra uma chamada a new PDO() que conecta a um banco de dados chamado restaurant em um servidor MySQL.<code></br></code>
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.1.php">Exemplo8.1</a></code>

A string passada como primeiro argumento para o construtor de PDO é chamada de nome da fonte de dados (DSN, data source name). Ela começa com um prefixo indicando com que tipo de
programa de banco de dados ocorrerá a conexão, depois vem dois pontos (:), e então pares chave=valor separados por ponto e vírgula fornecendo informações sobre como se conectar.Se
a conexão com o banco de dados precisar de um nome de usuário e senha, eles serão passados como o segundo e terceiro argumentos para o construtor do PDO.

Os pares chave=valor específicos que poderão ser inseridos em um DSN dependerão do tipo de programa de banco de dados com o qual você estiver se conectando. Embora o engine PHP 
possa se conectar a muitos banco de dados com o PDO, essa conectividade tem que ser ativada quando o engine é construído e instalado no servidor. Se aparecer uma mensagem 
could not find driver na criação de um objeto PDO, isso signfica que sua instalação do engine PHP não incorpora o suporte ao banco de dados que você está tentando usar.

A tabela 8.1 lista os prefixos e opções de DSN para alguns dos programas de banco dadaos mais populares que trabalham com PDO.
![image](https://user-images.githubusercontent.com/80215258/136678914-fd403c9c-dc0b-4791-8719-3e9605b43f7a.png)

Se tudo der certo com o construtor new PDO(), ele retornará um objeto que você usará para interagir com o banco de dados. Se houver um problema na conexão será lançada uma 
PDOException. certifique-se de capturar exceções que possam ser lançadas pelo construtor do PDO para verificar se a conexão foi bem-sucedida antes de prosseguir em seu programa.
O Exemplo8.2 mostra como fazê-lo.
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.2.php">Exemplo8.2</a></code>

Suponhamos que admin fosse a senha errada para o usuário admin. Nesse o Exemplo8.2 exibiria algo como:

    Couldn't connect to the databaseSQLSTATE[HY000] [1045] Access denied for user 'admin2'@'localhost' (using password: YES)
  
## Criando uma tabela
Antes de pode inserir ou recuperar qualquer dado em uma tabela de banco de dados, você deve criar a tabela. Geralmente essa é uma operação que se executa uma única vez. 
Só precisamos pedir ao programa de banco de dados que crie uma tabela uma única vez. O programa PHP que usa a tabela poderá fazer leituras ou gravações nela sempre que for
executado sem precisar recriá-la. Se uma tabela de banco de dados é como uma planilha, então, criar uma nova tabela é como criar o arquivo de uma nova planilha. Após criar o
arquivo, você pode abri-lo várias vezes para fazer leituras ou alterações.

O comando SQL para a criação de uma tabela é CREATE TABLE. É preciso fornecer o nome da tabela e os nomes e tipos de todas as colunas. O Exemplo8.3 mostra o comando SQL que cria
a tabela dishes mostrada na figura 8.1.

    //Exemplo8.3 - Criando a tabela dishes
    
    CREATE TABLE dishes(
      dish_id INTEGER PRIMARY KEY,
      dish_name VARCHAR(255),
      price DECIMAL(4,2),
      is_spicy INT
     )
 
 Para criar realmente a tabela, você precisa enviar o comando CREATE TABLE para o banco de dados. Após conectar-se com new PDO(), use a função exec() para enviar o comando como
 mostrado no Exemplo8.4
