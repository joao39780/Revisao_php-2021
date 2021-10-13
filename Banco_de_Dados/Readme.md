# Conectando-se a um programa de banco de dados
<code><img height="50" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/php/php.png"></code>
<code><img height="50" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/mysql/mysql.png"></code>

Para estabelecer uma conexão com um programa de banco de dados, crie um novo objeto PDO. Você passará para o construtor do PDO uma string descrevendo o banco de dados com o qual
está se conectando, e ele retornará um objeto que será usado no resto de seu programa na troca de informações com o programa de banco de dados.

O Exemplo8.1 mostra uma chamada a new PDO() que conecta a um banco de dados chamado restaurant em um servidor MySQL.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.1.php">Exemplo8.1</a></code>

A string passada como primeiro argumento para o construtor do PDO é chamada de nome da fonte de dados (DSN, data source name). Ela começão com um prefixo indicando com que tipo
de programa de banco de dados ocorrerá a conexão, depois vem dois pontos (:), e então pares chave=valor separados por ponto e vírgula fornecendo informações sobre como se conectar
Se a conexão com o banco de dados precisar de um nome de usuário e senha, eles serão passados como o segundo e terceiro argumentos para o construtor do PDO.

Os pares chave=valor específicos que poderão ser inseridos em um DSN dependerão do tipo de programa de banco de dados com o qual você estiver se conectando. Embora o engine PHP
possa se conectar a muitos banco de dados com o PDO, essa conectividade tem que ser ativada quando o engine é construído e instalado no servidor. Se aparecer uma mensagem could
not find driver  na criação de um objeto PDO, isso significa que sua instalação do engine PHP não incorpora o suporte ao banco de dados que você está tentando usar.

A tabela 8.1 lista os prefixos e opções de DSN para alguns dos programas de banco de dados mais populares que trabalham com o PDO.

![image](https://user-images.githubusercontent.com/80215258/137208382-f4e29fe2-3fa8-4d3d-8b5d-5dc2adc36f3f.png)

Se tudo der certo com o construtor new PDO(), ele retornará um objeto que você usará para interagir com o banco de dados. Se houver um problema na conexão, será lançada uma 
DOException. Certifique-se de capturar exceções que possam ser lançadas pelo construtor de PDO Para verificar se a conexão foi bem-sucedida antes de prosseguir em seu programa.
O Exemplo8.2 mostra como fazê-lo.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.2.php">Exemplo8.2</a></code>

No Exemplo8.2, se o construtor do PDO lançar uma exceção, o código que estiver dentro do bloco try após a chamada a new PDO() não será executado. Em vez disso, o engine PHP pulará
para o bloco catch, onde uma mesagem de erro será exibida.

Suponhamos que admin fosse a senha errada para o usuário admin. Nesse casso, o Exemplo8.2 exibiria algo como: 

	Could not connect to the database:SQLSTATE[HY000] [1045] Access denied for user 'admin'@'localhost' (using password: YES)

# Criando uma tabela
Antes de poder inserir ou recuperar qualquer dado em uma tabela de banco de dados, você deve criar a tabela. Geralmente essa é uma operação que se executa uma única vez. Só
precisamos pedir ao programa de banco de dados que crie uma nova tabela uma vez. O programa PHP poderá fazer leituras ou gravações nela sempre que for executado sem precisar
recriá-la. Se uma tabela de banco de dados é como uma planilha. Após criar o arquivo, você poder abrí-lo várias vezes para fazer leituras ou alterações.

O comando SQL para a criação de uma tabela é CREATE TABLE. É preciso fornecer o nome da tabela e os nomes e tipos de todas as colunas. O Exemplo8.3 mostra o comando SQL que cria
a tabela dishes mostrada na figura8.1.

	Exemplo8.3 - Criando a tabela dishes
	
		CREATE TABLE dishes (
			
			dish_id INTEGER PRIMARY KEY,
			dish_name VARCHAR(255),
			price DECIMAL(4,2),
			is_spicy INT
		)
		
Para criar realmente a tabela, você precisa enviar o comando CREATE TABLE para o banco de dados. Após conectar-se com new PDO(), use a função exec() para enviar o comando como
mostrado no Exemplo8.4


<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.4.php">Exemplo8.4</a></code>

A próxma seção explicará exec() com mais detalhes. A chamada a $db->setAttribute() no Exemplo8.4 assegura que o PDO lance exceções se houver problemas com as consultas e não
apenas quando houver problemas na conexão. A manipulação de erros com PDO também será discutida na próxima seção.

O oposto de CREATE TABLE é DROP TABLE. Ele remove uma tabela e os dados existentes nela de um banco de dados. O Exemplo8.5 mostra a sintaxe de uma consulta que remove a tabela
dishes.

	Exemplo8.5 - Removendo uma tabela
	
		DROP TABLE dishes

Uma vez que você remover a tabela, ela desaparecerá definitivamente, logo, tome cuidado com DROP TABLE!

## Inserindo dados no banco de dados
Supondo que a conexão seja bem-sucedida, o objeto retornado por new PDO() dará acesso aos dados de seu banco de dados. Chamar as funções desse objeto permitirá que você envie
consultas para o programa de banco de dados e acesse os resultados. Para inserir alguns dados no banco de dados, passe uma instrução INSERT para o método exec() do objeto, como
mostrado no Exemplo8.6.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.6.php">Exemplo8.6</a></code>

O método exec() retorna o número de linhas afetadas pela instrução SQL que foi enviada para o servidor do banco de dados. Nesse caso, a inserção de uma única linha retorna 1
porque apenas uma linha (a que você inseriu) foi afetada.

Se algo der errado com INSERT, uma exceção será lançada. O Exemplo8.7 tenta executar uma instrução INSERT que tem nome de coluna inválido. A tabela dishes não contém uma coluna
chamada dish_size.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.7.php">Exemplo8.7</a></code>

Já que a chamada a $db->setAttribute() instrui o PDO a lançar uma exceção sempre que houver um erro, o Exemplo8.7 exibe:

	Couldn't insert a row: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'dish_size' in 'field list'

O PDO tem três modos de erro: de exceção, silencioso e de aviso. O modo de erro de exceção, que é ativado com uma chamada a $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION), é o melhor para a depuração e o que torna mais fácil assegurar que nenhum problema que ocorrer no banco de dados será deixado de lado. Se Você não
manipular uma exceção que o PDO gerar, seu programa parará de ser executado.

Os outros dois modos de erro requerem a verificação dos valores de retorno das chamadas de função do PDO para determinarmos se há um erro e usarmos os métodos adicionas do PDO
para encontrar informações sobre ele.

O modo silencioso é o padrão. Como outros métodos do PDO, se exec() falhar em sua tarefa, ele retornará false. O Exemplo8.8 verifica o valor de retorno de exec() e então usa o
método erroInfo() do PDO para obter detalhes do problema.


<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.8.php">Exemplo8.8</a></code>
