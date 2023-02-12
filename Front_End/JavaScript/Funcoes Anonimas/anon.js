// nao precisam de nomes associadas a ela

// funcoes anonimas ao serem declaradas nao oculpam necessariamente espaco em memoria / nao estam inicializadas

// Ela sera somente armazenada em memoria quando for executada

//funcoes anonimas precisam estar associadas a variaveis



//funcao normal
function soma(v1 = 0, v2 = 0) {
    return v1 + v2
}
console.log("funcao normal: " + soma(10, 5))



console.log('')



//funcao anonima
let f = function(v1 = 0, v2 = 0) {
    return v1 + v2
}
console.log("funcao anonima: " + f(10, 10))

console.log('')

//funcoes anonimas usando o parametro rest
let func = function(...valores) {
    let res = 0
    for(v of valores) {
        res += v
    }
    return res
}
console.log("funcoes anonimas usando o parametro rest: " + func(20, 10))

console.log('')

// funcoes anonimas com construtor new  /  funcao construtor
//primeiro passa parametros que a funcao vai ter e dps o que ela vai fz ou retornar / corpo da funcao
const funcao = new Function("n1, n2", "return n1 + n2")

console.log(funcao(2, 3))