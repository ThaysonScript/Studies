//  Todo parametro passado para a funcao sera usada dentro dela

//  pode ser passado valores padroes como o 0 abaixo

const valorPadrao = 0

function soma(n1 = valorPadrao, n2 = valorPadrao) {
    let res
    res = n1 + n2
    return res
}
let resultado_soma = soma(10, 5)

console.log(resultado_soma)

console.log('')

function add(v) {
    valor += v
}

let valor = 0

console.log(valor)

add(10)
console.log(valor)

add(5)
console.log(valor)

//  pode atribuir valor a variavel fora da funcao dentro ou antes