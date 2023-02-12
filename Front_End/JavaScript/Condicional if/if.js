//Condicionais simples
num1 = 10
if(num1 >= 10) {
    console.log('condicional verdadeira')
}
console.log('fim de condicional simples')
console.log('')


//Condicional completa
if(num1 >= 10) {
    console.log('É maior ou igual a 10, condicional true')
} else {
    console.log('Nao é maior ou igual a 10, condicional false')
}
console.log('fim de condicional completa')
console.log('')


//Condicional aninhada simples
if(num1 >= 10) {
    console.log('condicional verdadeira, maior ou igual a 10')
    if(num1 >=100) {
        console.log('num1 é maior ou igual a 100')
    }
}
console.log('fim de condicional simples com aninhamento')
console.log('')


//Condicional completa aninhada
if(num1 >= 10) {
    console.log('É maior ou igual a 10, condicional true')
    if(num1 == 10) {
        console.log('É igual a 10')
    } else {
        console.log('Nao é igual a 10')
    }

} else if(num1 >= 100){
    console.log('É maior ou igual a 100, condicional true')
    if(num1 == 100) {
        console.log('É igual a 100')
    } else {
        console.log('Nao é igual a 100')
    }

} else {
    console.log('Nao é maior ou igual a 10 e 100, condicional false')
}
console.log('fim de condicional completa e aninhada')

//AÍ TEM OS OPRS CONDICIONAIS:
//      && || !