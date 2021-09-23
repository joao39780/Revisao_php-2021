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
