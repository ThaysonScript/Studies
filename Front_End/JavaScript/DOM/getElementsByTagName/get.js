//dom
const div1 = document.getElementById("d1");
const div2 = document.getElementById("d2");
const div3 = document.getElementById("d3");
const div4 = document.getElementById("d4");
const div5 = document.getElementById("d5");

//div 1
console.log(div1);
console.log(div1.id);
console.log(div1.innerHTML);

div1.innerHTML = 'Programando...';

//div 2
console.log(div2);
console.log(div2.id);
console.log(div2.innerHTML);

div2.innerHTML = 'alteracao do inner html';

//array de doms
const arrayElements = [div1, div2, div3, div4, div5]

//pegar colecao de html e jogar em um spread que transforma em array
const colectionHtml = [...document.getElementsByTagName("div")]

console.log(colectionHtml)

colectionHtml.map((e) => {
    console.log(e)
})