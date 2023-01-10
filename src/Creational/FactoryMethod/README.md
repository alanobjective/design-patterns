## Factory Method
Factory Method é um padrão de design criacional que fornece uma interface para criar objetos em uma superclasse, mas permite que as subclasses alterem o tipo de objeto que será criado.

## Problema
Em um sistema fictício, temos o cálculo se uma bicicleta consegue percorrer um valor de milhas rodadas. Este sistema começou a expandir e foi necessário adicionar o suporte para Scooter Elétrico, porém o código não está preparado para efetuar o cálculo das milhas rodadas e precisa ser modificado para também realizar o cálculo.

## Resolução
Após uma análise, foi decidido a refatoração deste código com a implementação do Factory Method.