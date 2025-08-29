let numeroMaximo = prompt('Qual maior válor do jogo?');
let segredo = parseInt((Math.random() * numeroMaximo) + 1);
let cont = 0;
let chute; // declar fora por causa de escopo de variável
do{
    chute = prompt('Qual o valor?');
    cont++;

    if (chute > segredo) alert (`Número é menor que ${chute}`)
    else if (chute < segredo) alert (`Número é maior que ${chute}`)

}while(segredo != chute)

let tentativa = cont == 1 ? "tentativa" : "tentativas"
alert(`Você acertou o número ${segredo} em ${cont} ${tentativa}`)