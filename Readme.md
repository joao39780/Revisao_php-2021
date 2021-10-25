# Modelo MVC
  O MVC é um padrão de arquitetura de software que visa realizar a **separação** dos elementos de um software em FrontEnd (visão do usuário - tela) e do BackEnd 
  (processamento do núcleo ou motor da aplicação).
  
 ## Model (modelo)
 Modelo (Model) é a camada de software que representa os dados, de forma que permita ao sistema realizar o acesso (escrita e leitura) em um banco de dados, aos referidos dados.
 Nele são definidas a regras de validação e como o acesso aos dados são realizados, tornando transparente ao usuário como este acesso é realizado. 

## View (visão)
Visão (view) - é a parte do software visualizada pelo usuário, na qual ele pode interagir com o sistema por meio de telas, formulário e links e é nesta camada que outras 
tecnologias como o jQuery, Ajax, Css e HTML são utlizadas, quando no ambiente Web.
![Capturar](https://user-images.githubusercontent.com/80215258/138762541-0964dd39-158e-4a49-9094-277953a9b988.PNG)

## Controller (controle)
Controle (Controller) - é a parte do software que realiza as ações de transações no sistema, entretanto, ele não faz acesso aos dados (funçaão do model). Nem mesmo realiza a a
apresentação destes para o usuário. Ou seja, a função do controle é gerenciar "de onde vem" e "para onde vão" os dados.
![image](https://user-images.githubusercontent.com/80215258/138763119-1785c9a6-6957-4008-a541-9136abf9c39a.png)
