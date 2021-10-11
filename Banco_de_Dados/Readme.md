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

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.4.php">Exemplo8.4</a></code>

A próxima seção explicará exec() com mais detalhes. A chamada a $db->setAttribute() no Exemplo8.4 assegura que o PDO lançe exceções se houver problemas com as consultas e não
apenas quando houver problemas na conexão. A manipulação de erros com PDO também será discutida na próxima seção.

O oposto de CREATE TABLE é o comando DROP TABLE. Ele remove uma tabela e os dados existentes nela de um banco de dados. O Exemplo8.5 mostra a sintaxe de uma consulta que remove
a tabela dishes.

    Exemplo8.5 - Removendo uma tabela
        
        DROP TABLE dishes

## Inserindo dados no banco de dados
Supondo que a conexão seja bem-sucedida, o objeto retornado por new PDO dará acesso aos dados de seu banco de dados. Chamar funções desse objeto permitirá que você envie
consultas para o programa de banco de dados e acesse os resultados. Para inserir alguns dados no banco de dados, passe uma instrução INSERT para o método exec() do objeto,
como mostrado no Exemplo8.6.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.6.php">Exemplo8.6</a></code>

O método exec() retorna o número de linhas afetadas pela instrução SQL que foi enviada para o servidor do banco de dados. Nesse caso, a inserção de uma única linha retorna 1
porque apenas uma linha (a que você inseriu) foi afetada.

Se algo der errado com INSERT, uma exceção será lançada. O Exemplo8.7 tenta executar uma instrução INSERT quem tem o nome de coluna inválido. A tabela dishes não contém uma
coluna chamada dish_size.


<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.7.php">Exemplo8.7</a></code>

Já que a chamada a $db->setAttribute() instrui o PDO a lançar uma exceção sempre que houver um erro, o Exemplo8.7 exibe:

    Couldn't insert a row: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'dish_size' in 'field list'
    
O PDO tem três modos de erro: de exceção, silencioso e de aviso. O modo de erro de exceção, que é ativado com uma chamada a $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION), é o melhor para a depuração e o que o torna mais fácil assegurar que nenhum problema que ocorrer no banco de dados será deixado de lado. Se você não
manipular uma exceção que o PDO gerar, seu programa parará de ser executado.

Os outros dois modos de erro requerem a verificação dos valores de retorno das chamadas de função do PDO para determinarmos se há um erro e usarmos os métodos adicionais do PDO
para encontrar informações sobre ele.

O modo silencioso é o padrão. Como outros métodos do PDO, se exec() falhar em sua tarefa, ele retornará false. O Exemplo8.8 verifica o valor de retorno de exec() e então usa o
método errorInfo() do PDO para obter detalhes do problema.

 
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.8.php">Exemplo8.8</a></code>

No Exemplo8.8, o valor de retorno de exec() é comparado com false com o uso do operador de identidade de sinal triplo para diferenciarmos um erro real (false) de uma consulta 
bem-sucedida que simplesmente não está afetando nenhuma linha. Em seguida, errorInfo() retorna um array com três elementos com informações de erro. O primeiro elemento é um
código de erro SQLSTATE. Esses códigos de erro estão em grande parte padronizados entre os diferentes programas de banco de dados. Nesse caso HY000 é um valor abrangente para
erros em geral. O segundo elemento é um código de erro específico do programa de banco de dados que está sendo usado. O terceiro elemento é uma mensagem textual descrevendo o 
erro.

O modo de aviso é ativado com a configuraçãop do atributo PDO::ATTR_ERRMODE com PDO::ERRMODE_WARNING, como mostrado no Exemplo8.9. Nesse modo, as função se comportam como no 
modo silencioso - sem exceções, retornando false em caso de erro - mas o engine PHP também gera uma mensagem de erro de nível de aviso.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.9.php">Exemplo8.9</a></code>

O Exemplo8.9 produz a mesma saída do Exemplo8.8, mas também gera a mensagem de erro a seguir:

    Warning: PDO::exec(): SQLSTATE[42S22]: Column not found: 1054 Unknown column 'dish_size' in 'field list' in /var/www/html/Revisao_php-2021/Banco_de_Dados/Exemplo8.9.php on line 6

![image](https://user-images.githubusercontent.com/80215258/136810847-5af97298-3565-4d50-af8e-2645862f3ea4.png)
![image](https://user-images.githubusercontent.com/80215258/136810905-4526e732-209b-47b9-80c2-b4a801fde524.png)

Use a função exec para alterar dados com UPDATE. O Exemplo8.15 mostra algumas instruções com UPDATE.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.15.php">Exemplo8.15</a></code>

Você também pode usar a função exec() para excluir dados com DELETE. O Exemplo8.16 mostra exec() com duas instruções DELETE
