# Grupos de dados: trabalhando com arrays
<code><img height="50" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/php/php.png"></code>

Arrays são conjuntos de valores relacionados, como os dados enviados em um formulário, os nomes dos alunos em de uma classe ou as populações de uma lista de cidades. Uma variável
é um contêiner nomeado que armazena um valor. Um array é um contêiner que armazena vários valores.

## Fundamentos dos arrays
Um array é composto por elementos. Cada elemento tem uma chave e um valor. Por exemplo, um array contendo informações sobre as cores dos vegetais teria os nomes dos vegetais como
chaves e as cores como valores, como mostra a figura abaixo.

![image](https://user-images.githubusercontent.com/80215258/135370507-160cb782-6985-4c02-a60d-ca6f06000818.png)

Um array só pode ter um único elemento com uma determinada chave. No array de cores dos vegetais, não pode haver outro elemento com a chave corn ainda que seu valor seja blue.
No entanto, o mesmo valor pode aparecer muitas vezes no mesmo array. Você pode ter pimentas verdes, brocolis verde e aipo verde.

Qualquer valor de string ou numérico pode ser a chave de um elemento do array, como corn, 4, -36 ou salt Baked Squid. Os arrays e outros valores escalares não podem ser chaves,
mas podem ser valores dos elementos. O valore de um elemento pode ser qualquer tipo: uma string, um número, true, false ou um tipo não escalar como outro array.

## Criando um array
Para criar um array, use a estrutura array da linguagem. Especifique uma lista de pares chave/valor delimitados por uma vírgula, com a chave e o valor separados por =>. Isso é
mostrado no Exemplo4.1

<code><a href="https://github.com/joao39780/Revisao_php-2021/blob/master/Array/Exemplo4.1.php">Exemplo4.1.php</a></code>
