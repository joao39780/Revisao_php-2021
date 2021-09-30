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
