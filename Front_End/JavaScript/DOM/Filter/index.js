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

// o filter pode ser passado 3 argumentos opcionais e ele faz a filtragem de dados, serve como um map, mas é mais prático quando tiver que tratar os seus dados em condicoes por exemplo