// map tem a capacidade de percorrer arrays / itera toda a colecao / percorre todo o array sem poder interromper no meio
//mais rapido e eficiente de se usar para percorrer um array por completo

//criamos um array
const cursos = ["HTML", "CSS", "JAVASCRIPT", "PHP", "REACT"]

//usamos o metodo map que percorre o array e chamamos uma funcao que pega o elemento e seu indice onde esta no array
cursos.map((elementoChamado, posicaoElemento) => {
    console.log(`Cursos: ${elementoChamado} - Posicao do curso no array: ${posicaoElemento}`)
})

console.log("")

//podemos usar o map para retornar somente os elementos ou somente os indice e muito mais...
let c = cursos.map((elemento, indice) => {
    return elemento
})
console.log(c)


console.log("")


let cs = cursos.map((elemento, indice) => {
    return indice
})
console.log(cs)



console.log("")



// manipulando o DOM com o map

let divs = [...document.getElementsByTagName("div")]
divs.map((e, i) => {
    console.log(e)
})


console.log("")



const el = document.getElementsByTagName("div")
const val = Array.prototype.map.call(el, ({innerHTML}) => innerHTML)
console.log(val)



console.log("")



const converterInt = (el) => parseInt(el)
let num = ['1', '2', '3', '4', '5'].map(converterInt)
console.log(num)