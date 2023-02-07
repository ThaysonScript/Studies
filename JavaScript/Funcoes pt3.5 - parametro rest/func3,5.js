// O parametro rest nao precisa especificar o tamanho dos parametros que serao passados para a funcao
// É usado o spread para espalhar os valores em um array

//metodo normal
function soma(...valores) {
    let tam = valores.length
    let res = 0
    for(let i = 0; i < tam; i++) {
        res += valores[i]
    }
    return res
}
console.log(soma(10, 5, 5, 10))

console.log('')

// Forma simplificada
function soma(...valores) {
    let res = 0
    for(v of valores) {
        res += v
    }
    return res
}
console.log(soma(10, 5, 5, 10))