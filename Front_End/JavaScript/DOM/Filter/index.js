const idade = [11, 21, 31, 41, 51, 6, 17, 18]

// const filtrarIdade = (valor) => {
//     if(valor >= 18) {
//         return valor
//     }
// }

// const maior = idade.filter(filtrarIdade)

// console.log(idade);
// console.log(maior);


// forma mais simples de se filtrar valores
const maior2 = idade.filter((valor, indice, array) => {
    if (valor >= 18) {
        return valor
    }
})

const menor = idade.filter((val, indic, arr) => {
    if (val < 18) {
        return val
    }
})

console.log(idade);
console.log(maior2);
console.log(menor);