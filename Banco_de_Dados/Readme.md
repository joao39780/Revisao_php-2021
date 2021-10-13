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
