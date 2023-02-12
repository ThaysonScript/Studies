"use strict"  //restringe o uso de variaveis, tem que declará-las de qualquer modo senão o codigo não funciona

//Abaixo o codigo irá funcionar, pois sua variavel foi declarada usando o "strict mode"
let sobrenome = "Guedes"
console.log(sobrenome)
console.log("sobrenome: " + sobrenome)
console.log(`o sobrenome é: ${sobrenome}`)

console.log("")

//Abaixo o codigo não funcionará por causa da variavel "nome" não declarada, o "use strict" funciona apenas para variaveis declaradas
nome = "Thayson"   
console.log(nome)
console.log("nome: " + nome)
console.log(`o nome é: ${nome}`)


//Tente declarar a variavel "nome" para ver a diferença, recomenda-se usar sempre strict mode nos codigos javascript