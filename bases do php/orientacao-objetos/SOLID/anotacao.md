#

## Coesão

Uma classe coesa faz bem uma única coisa
Classes coesas não devem ter várias responsabilidades

## Encapsulamento

Getters e setters não são formas eficientes de aplicar encapsulamento
É interessante fornecer acesso apenas ao que é necessário em nossas classes
O encapsulamento torna o uso das nossas classes mais fácil e intuitivo

## Acoplamento

Acoplamento é a dependência entre classes
Acoplamento nem sempre é ruim, e que é impossível criar um sistema sem nenhum acoplamento
Devemos controlar o nível de acoplamento na nossa aplicação (falaremos mais sobre isso)

## SOLID

### Single Responsability

Classe, componente, entidade ou fnção com apenas 1 responsabilidade

### Open-Close

aberto para extender novas funcionalidades, mas sem modificar a base dele.

### Liskov Substitution

classes filhas não devem violar definições de tipo e funcionalidade da classe pai. Pois deve ser possivel substituir uma classe base por qualquer uma de suas derivadas sem qualsar comportamentos inesperados.

### Interface Segregation

modulos de alto nível não devem depender de módulos de baixo nível, classes abstratas e interfaces não devem depender de classes concretas, embora classes concretas dependam de interfaces e classes abstratas. não pode depender de como classes concretas funcionam, não depender de implementações concretas

### Dependency Inversion

ISP
classes não devem ser obrgadas a implementar métodos que não irão precisar