"use strict"

/*
O uso do const é igual ao let, mas depois que atribuido o seu valor, ele não pode ser alterado na execução do codigo, resultado: TypeError, não se pode alterar valor de uma variavel const
*/
const nome1 = "Bruno"
console.log(nome1)

/* RODE ISSO DPS DE VER TODO O CONTEUDO DO CONST
nome1 = "Thayson"
console.log(nome1)
*/

console.log('') //pular linha


/*
A variavel aqui abaixo declarada dentro de um escopo pode ser usada fora e dentro dele, por isso que a variavel "nome2" com valor "Arnaldo" irá ser execultada no console.log que esta dentro e fora do escopo da funcao
*/
if(true) {
    var nome2 = "Arnaldo"
    console.log(`O seu nome é: ${nome2} e esta dentro do escopo da funcao if`)
}
console.log(nome2 + " esta fora do escopo da funcao if")
console.log('') //pular linha


/*
A variavel aqui abaixo declarada dentro de um escopo não pode ser usada fora dele, por isso que a variavel "nome3" com valor "Carlos" não irá ser execultada no console.log que esta fora do escopo da funcao, resultado: erro de referencia, nome3 não declarado.
Extra: let só serve para o escopo aonde ela foi declarada 
*/
if(true) {
    let nome3 = "Carlos"
}
console.log(nome3)