//queryselector sempre vai ser melhor porque pode usar qualquer coisa, substituindo os anteriores

//pega o primeiro que encontrar
const um = document.querySelector("div")
console.log(um)

const umid = document.querySelector("div#c2")
console.log(umid)

const umclass = document.querySelectorAll("div.curso")
console.log(umclass)

//pega todos em um formato antigo de html colection, nodelist
const todos = document.querySelectorAll("div")
console.log(todos)

//transformando em um array com spread
const todost = [...document.querySelectorAll("div")]
console.log(todost)

const outro1 = [...document.querySelectorAll("div, p")]
console.log(outro1)

const outro2 = [...document.querySelectorAll("div, p[class]")]
console.log(outro2)

//pegando elementos de uma tag que ta dentro de outra tag
const tag = document.querySelectorAll("div > p")
console.log(tag)