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

O exemplo exibe:

	Couldn't insert a row:
		SQL Error=42S22, DB Error=1054, Message=Unknown column 'dish_size' in 'field list'

No Exemplo8.8, o valor de exec() é comparado com false com o uso do operador de identidade de sinal triplo para diferenciarmos um erro real (false) de uma consulta bem-sucedida
que simplesmente não está afetando nenhuma linha. Em seguida, errorInfo() retorna um array de três elementos com informações de erro. O primeiro elemento é um código SQLSTATE.
Esses códigos de erro estão em grande parte padronizados entre os diferentes programas de banco de dados. Nesse caso, HY000 é um valor abrangente para erros em geral. O segundo
elemento é um código de erro específico do programa de banco de dados que está sendo usado. O terceiro elemento é uma mesagem textual descrevendo o erro.

O modo de aviso é ativado com a configuração do atributo PDO::ATTR_ERRMODE com PDO::ERRMODE_WARNING, como mostrado no Exemplo8.9. Nesse modo, as funções se comportam como no 
modo silecioso - sem exceções retornando false em caso de erro - mas o engine PHP também gera uma mensagem de erro de nível de aviso.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.8.php">Exemplo8.8</a></code>

O Exemplo8.9 produz a mesma saída do Exemplo8.8, mas também gera a mensagem de erro a seguir:

	
	Warning: PDO::exec(): SQLSTATE[42S22]: Column not found: 1054 Unknown column 'dish_size' in 'field list' in /var/www/html/Revisao_php-2021/Banco_de_Dados/Exemplo8.9.php 	 on line 6
	Couldn't insert a row!
	QL Error=42S22, DB ERROR=1054, Message=Unknown column 'dish_size' in 'field list'

![image](https://user-images.githubusercontent.com/80215258/137224878-90ed3037-6572-4f28-8973-7727d3f0362c.png)
![image](https://user-images.githubusercontent.com/80215258/137224909-21e873ef-2554-4446-a4d4-659bfcc62b74.png)

Use a função exec() para alterar dados com UPDATE. O Exemplo8.15 mostra algumas instruções UPDATE.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.15.php">Exemplo8.15</a></code>

Você também pode usar a função exec() para excluir dados com DELETE. O Exemplo8.16 mostra exec() com duas instruções DELETE.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.16.php">Exemplo8.16</a></code>

![image](https://user-images.githubusercontent.com/80215258/137231885-50c2c96e-bddf-4c99-8a79-fe43f9d90722.png)
![image](https://user-images.githubusercontent.com/80215258/137231906-ce6e058c-d345-42e7-a434-818ac5b43204.png)

Lembre-se que exec() retorna o número de linhas alteradas ou removidas por uma instrução UPDATE ou DELETE. Use o valor de retorno para saber quantas linhas esse consulta afetou.
O Exemplo8.21 informa quantas linhas tiveram seus preços alterados por uma consulta UPDATE.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.21.php">Exemplo8.21</a></code>

Se houver duas linhas na tabela dishes cujo preços forem maiores que 3, o Exemplo8.21 exibirá:

	Changed the price of 2 rows.
	
![image](https://user-images.githubusercontent.com/80215258/137233110-452136ae-b500-4cc3-8946-3f53652b4b5c.png)

## Inserindo dados em formulários seguramente
Exibir dados de formulário não sanatizados pode deixar você e seus usuários vulneráveis a um ataque de cross-site scripting. Usar dados não sanatizados em consultas SQL pode 
causar um problema semelhante, chamado "ataque de injeção SQL". Considere um formulário que permitisse que o usuário sugerisse um novo prato. O formulário contém um elemento
de texto chamado new_dish_name no qual o usário pode digitar o nome do novo prato. A chamada a exec() no Exemplo8.25 insere um novo prato na tabela dishes, mas é vulnerável a um
ataque de injeção SQL.


<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.25.php">Exemplo8.25</a></code>

Se o valor enviado para new_dish_name for aceitável, como Fried Bean Curd, a consulta será bem-sucedida. As regras comuns do PHP para a interpolação de strings de aspas duplas
criarão a consulta INSERT INTO dishes(dish_name) VALUES('Fried Bean Curd'), que é válida e aceitável. No entantyo, uma consulta com um apóstrofo pode causar um problema. Se o
valor enviado para new_dish_name for General Tso's Chicken, a consulta criada será INSERT INTO dishes(dish_name) VALUES('General Tso's Chicken'). Essa consulta confundirá o 
programa de banco de dados. Ele deduzirá que o apóstrofo entre Tso e s termina a string, logo, s Chicken' após a segunda aspa simples será um erro de sintaxe indesejado.

E o pior é que um usuário que quiser causar danos problemas poderá digitar um entrada construída especialmente para provocar danos. Considere a entrada incomum a seguir:

	x'); DELETE FROM dishes; INSERT INTO dishes(dish_name) VALUES('y.

Quando ela for interpolada a consulta será:

	INSERT INTO dishes VALUES('x');
	DELETE FROM dishes; INSERT INTO dishes(dish_name) VALUES('y');

Alguns bancos de dados permitem a passagem de várias consultas separadas por ponto e vírgula na mesma chamada exec(). Neles, a entrada anterior faria a tabela dishes ser d
destruída: um prato chamado x seria inserido, em seguida todos os pratos seriam excluídos, e então um prato chamado y seria inserido.

Enviando um valor de entrada construído cuidadosamente, um usuário malicioso pode injetar instruções SQL em seu programa de banco de dados. Para evitar este problema, você 
precisa escapar caracteres especiais (pricipalmente o apóstrofo) em consultas SQL. O PDO fornece um recurso útil chamado instruções preparadas que torna isso fácil.

Com as instruções preparadas, você pode separar a execução de sua consulta em duas etapas. Primeiro, fornecerá ao método prepare() do PDO uma versão da consulta com um ponto de
interrogação (?) em cada local do código SQL em que quiser que entre um valor. Esse método retornará um objeto PDOStatement. Em seguida você chamará execute() em seu objeto 
PDOStatement, passando para ele um array de valores que substituirá  os caracteres de ? de espaço reservado. Os valores devem receber as aspas apropriadas antes de serem 
inseridos na consulta para protegerem contra ataques de injeção SQL. O Exemplo8.26 mostra a versão segura do Exemplo8.25.


<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.26.php">Exemplo8.26</a></code>

Você não precisa inserir o placeholder entre aspas na consulta. O PDO também se encarrega disso. Se quiser usar múltiplos valores, insira vários placeholders na consulta e no
array de valores. O Exemplo8.27 mostra uma consulta com três placeholders.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.27.php">Exemplo8.27</a></code>

## Formulário completo de inserção de dados
O Exemplo8.28 combina os tópicos referentes a banco de dados abordados até agora neste capítulo com o código de manipulação de formulário para construir um programa completo que
exibe um formulário, válida os dados enviados e os salva em tabela de banco de dados. O formulário exibe elementes de entrada para o nome de um praot, seu preço e para indicar 
se o prato é apimentado. As informações são inseridas na tabela dishes.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.28.php">Exemplo8.28</a></code>

O Exemplo8.28 tem a mesma estrutura básica dos exemplos de formulário do capítulo7: funções para exibição, validação e processamento do formulário com alguma lógica global que
determina que função será chamada. As duas partes são o código global, que estabelece a conexão com o banco de dados, e as atividades relacionadas a banco de dados de process_form().

O código de preparação do banco de dados vem após as instruções require e antes de if($_ SERVER['REQUEST_METHOD'] == 'POST'). A Chamada a new PDO() estabelece uma conexao de 
banco de dados e as linhas seguintes verificam se a conexão foi bem-sucedida e especificam o modo de exceção para a manipulação de erros.

A função show_form() exibe o código HTML do formulário definido no arquivo insert-form.php. Esse arquivo é mostrado no Exemplo8.29.


<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.29.php">Exemplo8.29</a></code>

Com exceção da conexão, o resto da interação com o banco de dados se encontra na função process_form(). Primeiro, a linha global $db nos permite referenciar a variável de 
conexão com o banco de dados dentro da função com o uso de db em vez da notação mais complicada $GLOBALS['db']. Em seguida, já que a coluna is_spicy da tabela contém 1 nas
linhas de pratos apimentados e 0 nas linhas de pratos não apimentados, a cláusula if() de process_form() atribui o valor apropriado à variável local $is_spicy de acordo com
o que foi enviado em $input['is_spicy'].

Depois vem as chamadas a prepare() e execute(), que inserem realmente as novas informações no banco de dados. A instrução INSERT tem três placeholders que são preenchidos pelas
variáveis $input['dish_name'], $input['price'] e $is_spicy. Nenhum valor é necessário para a coluna dish_id porque o SQLite a preenche automaticamente. Para concluir, 
process_form() exibe uma mensagem para informar ao usuário que o prato foi inserido. A função htmlentities() nos protege contra qualquer tag HTML ou código javascript que possa
haver no nome do prato. Já que prepare() e execute() estão dentro de um bloco try, se algo der errado, uma mensagem de erro alternativa será exibida.

## Recuperando dados no banco de dados
Para recuperar informações no banco de dados, use o método query(). Você deve passar para o método uma consulta SQL feita ao banco de dados. Ele retornará um objeto PDOStatement
que dará acesso as linhas recuperadas. Sempre que você chamar o método fetch() desse objeto, obterá a próxima retornada pela consulta. Quando não houver mais linhas, fetch()
retornará um valor avaliado como falso, perfeito para ser usado em um loop while(). Isso é mostrado no Exemplo8.30.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.30.php">Exemplo8.30</a></code>

Na primeira vez que o código percorre o loop while(), fetch retorna um array contendo walnut Bun e 1. Esse array é atribuido a $row. Já que um array com elementos é avaliado 
como verdadeiro, o código do loop while é executado exibindo os dados da primeira linha retornada pela consulta SELECT. Quando não há mais linhas para retornar, fetch() retorna
um valor que é avaliado como falso e o loop while() termina.

Por padrão fetch retorna um array com chaves tanto numéricas quanto de string. As chaves numéricas, começando em 0, contêm o valor de cada coluna na linha. As chaves de string
fazem o mesmo, com os nomes das chaves configurados com os nomes das colunas. No Exemplo8.30, os mesmos resultados poderiam ser exibidos com o uso de $row[0] e $row[1].

Para saber quantas linhas uma consulta SELECT retornou, a única opção segura é recuperar todas as linhas e contá-las. O objeto PDOStatement fornece um método rowCount(), mas ele
não funciona com todos os bancos de dados. Se você tiver um número pequeno de linhas e quiser usa-lás em seu programa, utilize o método fetchAll() para inseri-las em um array 
sem executar um loop, como mostrado no Exemplo8.31.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.31.php">Exemplo8.31</a></code>

Se o número de linhas for tão grande ao ponto de tornar inviável recuperar todas as linhas, solicite ao seu programa de banco de dados que conte as linhas em seu nome com a 
função COUNT() do SQL. Por exemplo, SELECT COUNT( * ) FROM DISHES retorna uma linha com uma coluna cujo valor é o número de linhas da tabela inteira.

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Banco_de_Dados/Exemplo8.37.php">Exemplo8.37</a></code>

![image](https://user-images.githubusercontent.com/80215258/137813021-61df0047-e158-46af-bd93-e478e2a8a904.png)
![image](https://user-images.githubusercontent.com/80215258/137813046-a8f77394-2c6b-4f12-beb8-6b5afbb907a5.png)
![image](https://user-images.githubusercontent.com/80215258/137813080-83ddca2d-d989-4378-b399-f6016d88a627.png)

Se você estiver esperando apenas uma linhas ser retornada por uma consulta, pode encadear sua chamada a fetch() no fim de query(). O Exemplo8.37 usa uma função fetch() encadeada
para exibir o item menos caro da tabela dishes.

![image](https://user-images.githubusercontent.com/80215258/137813925-06141554-18b3-471c-b792-e236fe444f7c.png)
![image](https://user-images.githubusercontent.com/80215258/137813939-8eceddeb-065f-4c1f-8c9a-de83b1e0fa91.png)

## Alterando o formato das linhas recuperadas
Até agora, fetch retornou as linhas do banco de dados como arrays indexados tanto numericamente quanto na forma de strings. Isso proporcionou uma interpolação fácil e concisa de
valores em strings de aspas duplas - porém, também pode ser problemático. Tentar se lembrar, por exemplo, da coluna retornada pela consulta **SELECT** que corresponde ao 
elemento 6 do array de resultados pode ser difícil e propenso a erros. Alguns nomes das colunas em formatos string podem requerer aspas para serem interpolados apropriadamente. 
E fazer o engine PHP definir índices numéricos e de string será um exagero se você não precisar dos dois. Felizmente, o PDO nos permite especificar que cada linha do resultado
seja distribuída de uma maneira difirente. _Passe um estilo de busca alternativo_ como primeiro argumento para fetch() ou fetchAll() e obterá a linha apenas no formato de um
array numérico, ou na forma de um array de strings, ou como um objeto.

Para obter uma linha na forma de um array apenas com chaves numéricas, passe PDO::FETCH_NUM como primeiro argumento para fetch() ou fetchAll. Para obter uma linha somente com 
chaves no formato string, use PDO::FETCH_ASSOC.

Para obter uma linha como um objeto em vez de como um array, use PDO::FETCH_OBJ. O objeto retornado para cada linha terá nomes de propriedades correspondentes ao nomes das 
colunas.

O Exemplo8.43 mostra esses estilos de busca em ação.

