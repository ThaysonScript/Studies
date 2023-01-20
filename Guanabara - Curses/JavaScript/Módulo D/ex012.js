// VOTO

/*
var idade = 15
if(idade >= 18) {
    console.log('voto obrigatorio')
} else if(idade >= 16 || idade >= 65) {
    console.log('voto opcional')
} else if(idade < 16) {
    console.log('voto nao permitido')
}
*/

// HORAS

/*
var hr_atual = new Date() //nova data
var hr = hr_atual.getHours()  //pegar hora atual
if(hr < 12) {
    console.log('bom dia')
} else if(hr <= 17) {
    console.log('boa tarde')
} else {
    console.log('boa noite')
}
*/

// SWITCH CASE

var semana = new Date()
var diaSemana = semana.getDay() // pegar dia da semana atual

switch(diaSemana) {  // transformar o array do dia da semana em uma string do nome em si
    case 0:
        console.log('domingo')
        break

    case 1:
        console.log('segunda')
        break

    case 2:
        console.log('terça')
        break

    case 3:
        console.log('quarta')
        break

    case 4:
        console.log('quinta')
        break

    case 5:
        console.log('sexta')
        break

    case 6:
        console.log('sabado')
        break
}