//usado para "espalhar" copiar items dentro de um array ou objeto para outra variavel

let n1 = [10, 20, 30]
let n2 = [10, 20, 30, 40, 50, 60]

let res = [...n1, ...n2]

console.log(res)

console.log("")

const jg1= {nome: "Bruno", energia: 100, vidas: 3, magia: 150}
const jg2= {nome: "Bruno", energia: 100, vidas: 5, velocidade: 80}

const jg3= {...jg1, ...jg2}

console.log(jg3)

//se as chaves forem iguais para diversos objetos, ele vai pegar as propriedades do ultimo objeto com os seus dados

// se tiverem chaves diferentes mesmo que algumas estejam iguais ele concatena tudo, copia todo o objeto para a variavel que vai ter o spread

//Altamente recomendado para ser usado em funcoes
const soma = (v1, v2, v3) => {
    return v1 + v2 + v3
}

let valores = [1, 5, 4]

console.log("Valores somados: " + soma(...valores))

// Use para transformar as tags html em um array que recebera todas as propriedades e metodos que podem ser usados em um array, voce podera manipular, adicionar e modificar o conteudo dessa tag
const obj1 = document.getElementsByTagName("div")   //uso normal da tag html

const obj2 = [...document.getElementsByTagName("div")] //uso da tag html com spread


//Aqui abaixo usando o ponto dps do obj2, há varios metodos que podem ser usados que erdam de um array
obj2.forEach(element => {
    element.innerHTML = "foi trocado"
})

obj1.length  //aqui é usado as propriedades padrao do vinculo do html com o javascript muito limitado a quantidade de metodos que podem ser usados