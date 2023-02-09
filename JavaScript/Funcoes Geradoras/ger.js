// pilar para asyncronidade em js
//usada para criar rotinas


//sintaxe:
function* cores() {
    yield "Vermelho"
    yield "Verde"
    yield "Azul"
}
const itc = cores()

console.log(itc.next().value)
console.log(itc.next().value)
console.log(itc.next().value)
console.log(itc.next().value)

/*
A funcao retorna o primeiro valor quando for chamada pela primeira vez. Ja na segunda vez ela nao retorna novamente o primeiro valor, mas sim o segundo e assim vai retornar cada valor para cada chamada da funcao, sendo a funcao que faz o controle e espera ser chamada novamente para executar o proximo comando de onde parou.
*/


console.log("")




function* perguntas() {
    const nome = yield "Qual é seu nome?"
    const esporte = yield "Qual o seu esporte favorito?"
    return `Seu nome é: ${nome} e seu esporte favorito é: ${esporte}`
}

const itp = perguntas()

console.log(itp.next().value)
console.log(itp.next("Thayson").value)
console.log(itp.next("fut").value)



console.log("")




function* contador() {
    let i = 0
    while(true) {
        yield i++
    }
}
const itc2 = contador()

console.log(itc2.next().value)
console.log(itc2.next().value)
console.log(itc2.next().value)
console.log(itc2.next().value)



console.log("")




function* contador() {
    let i = 0
    while(true) {
        yield i++

        if(i > 5) {
            break
        }
    }
}
const itc3 = contador()

for(let c of itc3) {
    console.log(c)
}