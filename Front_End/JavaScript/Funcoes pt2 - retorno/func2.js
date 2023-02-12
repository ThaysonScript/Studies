//retorna o que foi passado para o return e pode ser usado em um console log por exemplo

// depois que o return for executado acaba a execucao da funcao ate que a funcao seja chamada novamente

function retorno() {
    return "Funcao foi retornada"
}
console.log(retorno())

console.log('')

function mult() {
    let n1 = 2
    let n2 = 10
    let res = n1 * n2
    return res
}
console.log(`a mult de 2 e 10 é: ${mult()}`)

console.log('')

//esse resultado pode ser atribuido a uma variavel
let num = mult()
console.log(num)