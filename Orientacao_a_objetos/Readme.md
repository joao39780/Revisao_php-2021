# Dados e Lógica juntos: trabalhando com objetos
<code><img height="50" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/php/php.png"></code>

No mundo da programação, um objeto é uma estrutura que combina dados sobre algum assunto(como os ingredientes de uma refeição) com as ações aplicáveis a ele
(como determinar se algum ingrediente específico é usado). O uso de objetos em um programa fornece um arcabouço organizacional para o agrupamento de variáveis 
e funções relacionadas. 
Aqui estão alguns termos básicos que precisamos conhecer ao trabalhar com objetos:

## Classe
Modelo ou regra que descreve as variáveis e funções de um tipo de objeto. Por exemplo, uma classe Entree conteria variáveis para o armazenamento de seu nome e ingredientes.
As funções de uma classe Entree seriam para ações como conzihar o prato, serví-lo e determinar se um ingrediente específico é usado.

## Método
Função definida em uma classe.

## Propriedade
Variável definida em uma classe.

## Instância
Uso individual de uma classe. Se seu programa estivesse servindo três pratos para o jantar, você teria de criar três instâncias da classe Entree. Embora todas as instâncias se
baseiem na mesma classe, elas difeririam internamente por terem valores de propriedades diferentes. Os métodos das instâncias conteriam as mesmas instruções, mas provalvelmente
produziriam resultados distintos por se basearem nos valores de propriedade específicos de sua istância. Criar uma nova instância de uma classe denomina-se "instânciar um objeto".

## Construtor
Método especial que é executado automaticamente quando um objeto é instânciado. Em geral, os construtores definem as propriedades dos objetos e executam outras tarefas de 
manutenção que deixam o objeto pronto para uso.

## Método estático
Tipo de método especial que pode ser chamado sem a instânciação de uma classe. Os métodos estáticos não dependem dos valores das propriedades de uma instância específica

## Exceções
Uma exceção é um objeto especial que pode ser usado para indicar que algo excepcional ocorreu. A criação de uma exceção interrompe o engine PHP e o transfere para um caminho
diferente no código.
O que complementa o lançamento de exceções é sua captura - interceptar a exceção antes que o engine PHP a pegue e ponha de lado. Para você mesmo manipular uma exceção, é preciso
duas etapas:

1. Inserir o código que pode lançar uma exceção dentro de um bloco try.
2. Inserir um bloco catch que manipule o problema após o código que pode lançar a exceção.

## Estendendo um objeto (Herança)
Um dos aspectos dos objetos que os tornam tão úteis para a organização do código é a noção de subclasse, que permite a reutilização de uma classe ao mesmo tempo em que ela
recebe alguma funcionalidade adicional. Incialmente, uma subclasse (ás vezes chamada de classe-filha) tem todos os métodos e propriedades de uma classe existente(a classe-pai),
mas depois pode alterá-los ou adicionar o seus próprios.

<code><hr></code>

# Aspectos básicos dos objetos
O Exemplo6.1 define uma classe Entree para representar uma refeição
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Orientacao_a_objetos/Exemplo6.1.php">Exemplo6.1</a></code>

No Exemplo6.1, a definição da classe começa com a palavra-chave especial class, seguida pelo nome que estamos dando à classe. Após o nome da classe, tudo que se encontra entre
chaves é sua definição - suas propriedades e métodos. Essa classe tem duas propriedades ($name e $ingredients) e um método (hasIngredient()).

A palavra public informa ao engine PHP que partes do programa podem acessar a propriedade ou o método específico ao qual ela está associada.

O método hasIngredient() parece mais com uma definição de função comum, mas seu corpo contém algo novo: $this. Essa é uma variável especial que referencia qualquer que seja a
instância de uma classe que esteja chamando a função. O Exemplo6.2 a mostra em ação com duas instâncias diferentes.
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Orientacao_a_objetos/Exemplo6.2.php">Exemplo6.2</a></code>

O operador new retorna um novo objeto Entree, logo, no Exemplo6.2, $soup e $sandiwch referenciam instâncias diferentes da classe Entree.

O operador de seta (->), composto por um hífen e um sinal de maior que, abre caminho para as propriedades (variáveis) e métodos (funções) de um objeto. Para acessar uma propriedade, insira a seta após o nome do objeto e insira a propriedade após a seta. Para chamar um método, insira o nome do método após a set, seguido pelo parênteses que indicam uma chamada de função.

Dentro do loop foreach(), o método hasIngredient() de cada objeto é chamado. O método recebe o nome de um ingrediente e retorna se ele está ou não na lista de ingredientes do
objeto. Aqui você pode ver como a variável especial $this funciona. Quando $soup->hasIngredient() é chamado, $this referencia $soup dentro do corpo de hasIngredient(). Quando
$sandwich->hasIngredient() é chamado, $this referencia $sandwich. Nem sempre a variável $this referencia a mesma instância de objeto; em vez disso, ela referencia a isntância
em que o objeto está sendo chamado.

As classes também podem conter métodos estáticos. Esses métodos não podem usar a variável $this, já que não são executados no contexto de uma instância de objeto específica e
sim na própria classe. Os métodos estáticos são úteis para finalidade da classe e não para algum objeto. O Exemplo6.3 adiciona um método estático a Entree, que retorna uma lista
de tamanhos de pratos possiveis.
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Orientacao_a_objetos/Exemplo6.3.php">Exemplo6.3</a></code>

A declaração do método estático no Exemplo6.3 é semelhante a outras definições de métodos, como o acrésimo da palavra-chave static antes de function. Para chamar um método 
estático, é preciso inserir dois pontos duplos (::) entre o nome da classe e o nome do método em vez de ->, como mostrado no Exemplo6.4
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Orientacao_a_objetos/Exemplo6.4.php">Exemplo6.4</a></code>

# Construtores
Uma classe pode ter um método especial, chamado construtor, que é executado quando o objeto é criado. Normalmente, os construtores manipualm tarefas de configuração e manutenção
que tornam o objeto pronto para uso. Por exemplo, poderíamos alterar a classe Entree e fornecer um construtor para ela. Esse construtor recebe dois argumentos: o nome da 
refeição e a lista de ingredientes. Passando esses valores para o construtor, evitamos ter de definir as propriedades após o objeto ser criado. Em PHP, o método construtor de
uma classe se chama sempre construct(). o Exemplo6.5 mostra a classe alterada com seu método construtor.
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Orientacao_a_objetos/Exemplo6.5.php">Exemplo6.5</a></code>

No exemplo 6.5, é possivel ver que o método __ construct() aceita dois argumentos e atribui seus valores às propriedades da classe. O fato de os nomes dos argumentos coincidirem
com os nomes das propriedades é apenas uma conveniência - o engine PHP não exige que sejam iguais. Dentro de um construtor, a palavra-chave $this referencia a instância de
objeto específica que esta sendo construida.

Para passar argumentos para o construtor, trate o nome da classe como um nome de função ao chamar o operador new inserindo parênteses e os valores dos argumentos depois dele.
O Exemplo6.6 mostra nossa classe com o construtor em ação criando objetos $soup e $sandwich idênticos aos que usamos anteriormente.
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Orientacao_a_objetos/Exemplo6.6.php">Exemplo6.6</a></code>

O construtor é chamado pelo operador new como parte do que o engine PHP faz para criar um novo objeto, mas não é o construtor que cria o objeto. Isso significa que a função 
construtora não retorna um valor e não pode usar um valor de retorno para sinalizar que algo deu errado. Essa é uma tarefa para as exceções discutidas na próxima seção.

# Indicando um problema com exceções
No Exemplo6.5, o que aconteceria se algo diferente de um array fosse passado como  o argumento $ingredients? Da maneira como o código foi escrito, nada! $this->ingredients
recebe o valor de  $ingredients não importa qual seja. Porém, se ele não for um array, isso causará problemas quando hasIngredients() for chamado. 

Os construtores são ótimos para verificar se os argumentos têm o tipo certo, ou pelo menos apropriado. No entanto, precisam de uma maneira de avisar se houver um problema. É 
nesse momento que uma exceção pode ajudar. Uma exceção é um objeto especial que pode ser usado para indicar que algo excepcional ocorreu. A criação de uma exceção interrompe o
Engine PHP e o transfere para um caminho diferente no código.

O Exemplo6.7 modifica o construtor de Entree para que lance uma exceção se o argumento $ingredients não estiver no array.("Lançar" uma exceção signifca usar um exceção para informar ao engine PHP que algo deu errado.)
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Orientacao_a_objetos/Exemplo6.7.php">Exemplo6.7</a></code>

As exceções são representadas pela classe Exception. O primeiro argumento do construtor de exception é uma string que descreve o que ocorreu de errado. Logo, a linha
throw new Exception('$ingredients must be an array'); cria um novo objeto Exception e, em seguida, o passa para a estrutura throw, a fim de interromper o engine PHP.

Se $ingredients for um array, o código será executado como antes. Se não for um array, a exceção será lançada. O Exemplo6.8 mostra a criação de um objeto Entree com um 
argumento $ingredients inválido.
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Orientacao_a_objetos/Exemplo6.8.php">Exemplo6.8</a></code>

Foi bom termos impedido hasIngredient() de ser chamado para que ele não agisse sobre algo que não fosse um array de ingredientes, mas interromper totalmente o programa com uma
mensagem de erro tão severa é exagero. O que complementa o lançamento de exceções é sua captura - interceptar a exceção entes que o engine PHP a pegue e ponha de lado.

Para você mesmo manipular uma exceção é preciso executar duas etapas:
1. Inserir o código que pode lançar uma exceção em um bloco try.
2. Inserir um bloco catch que manipule o problema após o código que pode lançar a exceção.

O exemplo6.9 adiciona os blocos try e catch que lidam com a exceção.
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Orientacao_a_objetos/Exemplo6.9.php">Exemplo6.9</a></code>

No exemplo6.9, os blocos try e catch funcionam em conjunto. Cada uma das instruções do bloco try é executada e a execução para quando uma exceção é encontrada. Se isso ocorrer,
o engine PHP pulará para baixo, para o bloco catch, configurando a variável $e para conter o objeto Exception que foi criado. O código do bloco catch usa o método getMessage()
da classe Exception para recuperar o texto da mensagem fornecida para a exceção de quando ela foi criada.

# Estendento um objeto
Um dos aspectos dos objetos que os tornam tão úteis para a organização do código é a noção de subclasse, que permite a reutilização de uma classe ao mesmo tempo em que ela 
recebe alguma funcionalidade adicional. Inicialmente, uma subclasse (as vezes chamada de classe-filha) tem todos os métodos e propriedades de uma classe existente 
(a classe-pai), mas depois pode alterá-los ou adicionar os seus próprios.

Por exemplo, considere uma refeição que não fosse composta por um único prato e sim por uma combinação de pratos, como no caso de serem servidos juntos uma tigela de sopa e um
sanduíche. Nossa classe Entree seria forçada a modelar essa variação tratando "sopa" e "sanduíche" como ingredientes ou enumerando todas as sopas e sanduíches como parte do
combo. Nenhuma dessas soluções é ideal: sopa e sanduíche não são ingredientes e renumerar todos os ingredientes significaria ter de fazer atualizações em vários locais quando
algum ingrediente mudasse.

Podemos resolver esse problema de maneira mais sensata criando uma subclasse de Entree que receba instâncias de objetos Entree como ingredientes, e modificando o método 
hasIngredient() da subclasse para inspecionar os ingredientes dessas instâncias. O código dessa classe ComboMeal é mostrado no Exemplo6.10
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Orientacao_a_objetos/Exemplo6.10.php">Exemplo6.10</a></code>

No Exemplo6.10, o nome da classe, ComboMeal, é seguido por extends Entree. Isso informa ao engine PHP que a classe ComboMeal deve herdar todos os métodos e propriedades da 
classe Entree. Para o engine, é como se você redigita-se a definição de Entree dentro da definição de ComboMeal, o que pode ser feito sem ser preciso todo o tedioso trabalho
de digitação. Em seguida, as únicas coisas que precisam estar dentro das chaves da definição de ComboMeal são alterações ou acrésimos. Nesse caso a única alteração é um novo
método hasIngredient(). Em vez de examinar $this->ingredients como antes, estamos tradando-a como um array de objetos Entree e chamando o método hasIngredient em cada um desses
objetos. Se alguma das chamadas retornar true, isso signifca que uma dos pratos do combo tem o ingrediente especifícado, logo, o método hasIngredient() de ComboMeal retornará
true. Se após a iteração por todos os pratos, nada tiver retornado true, o método retornará false, ou seja, nenhum prato tem o ingrediente. O Exemplo6.11 mostra a subclasse
em ação.
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Orientacao_a_objetos/Exemplo6.11.php">Exemplo6.11</a></code>

Isso funciona bem, mas não temos garantia de que os itens passados para o construtor de ComboMeal são realmente objetos Entree. Se não forem, chamar hasIngredient() neles pode 
causar um erro. Para corrigir esse problema, precisamos adicionar um construtor personalizado a ComboMeal que verifique essa condição e também chame o construtor comum de Entree
para que as propriedades sejam definidas apropriadamente. Uma versão de ComboMeal com esse construtor é mostrada no Exemplo6.12.
<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Orientacao_a_objetos/Exemplo6.12.php">Exemplo6.12</a></code>

O construtor do Exemplo6.12 usa a sintaxe especial parent::__ construct() para referenciar o construtor de Entree. Assim como $this tem um significado próprio dentro dos métodos
de objetos, o mesmo ocorre com a palavra parent. Ela referencia a classe da qual classe atual é subclasse. Já que ComboMeal estende Entree. Logo, parent::__ construct() dentro
de ComboMeal referencia o método construct() da classe Entree.

Em construtores de subclasses, é importante lembrar que você precisa chamar o construtor pai explicitamente. Se deixar de fora a chamada parent::__ construct(), o construtor pai
nunca será chamado e seu comportamento presumivelmente essencial não será executado pelo Engine PHP. Nesse caso, o construtor de Entree verifica se $ingredients é um array e 
define as propriedades $name e $ingredients.

Após a chamada a parent::__ construct(), o construtor de ComboMeal verifica se cada ingrediente fornecido para o combo é um objeto Entree. Ele usa o operador instanceof para 
fazê-lo. A expressão $entree instanceof Entree será avaliada como true se $entree referenciar uma instância de objeto da classe Entree. Se algum dos ingredientes fornecidos
(que, para ComboMeal, são entradas) não for um objeto Entree, o código lançará uma exceção.

# Visibilidade de propriedades e métodos
O construtor de ComboMeal do Exemplo6.12 faz um ótimo trabalho verificando se um ComboMeal só esta recebendo instâncias de Entree como seus ingredientes. Porém o que ocorre
depois disso? O código subsequente poderia alterar o valor da propriedade $ingredients para alguma outra coisa - Um array de objetos não Entree, um número ou até mesmo false.

Podemos evitar esse problema alterando a visibilidade das propriedades. Em vez de public, poderíamos rotulá-las como private ou protected. Essas outras configurações de 
visibilidade não alteram o que o código da classe pode fazer - ele pode sempre ler ou gravar suas propriedades. A visibilidade privada (private) impede que códigos externos à
classe acessem a propriedade. A visibilidade protegida (protected) significa que o único código externo à classe que pode acessar a propriedade é o código da subclasses.

O Exemplo6.13 mostra uma versão modificada da classe Entree em que a propriedade $name é privada e a propriedade $ingredients é protegida
