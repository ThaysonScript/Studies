// funcao anonima normal
const soma = function(v1, v2) {
    return v1 + v2
}
console.log(soma(10, 5))

console.log("")

//arrow function / funcao lambda
const somar = (n1, n2) => {
    return n1 + n2
}
console.log(somar(10, 10))

console.log("")

// arrow function de um parametro só
//funcionam apenas se tiverem um parametro passado apenas
const num = n => {
    return n
}
console.log(num(50))

console.log("")

//pode ser usada sem return quando tem apenas um parametro
const mult = x => x*2
console.log(mult(50))