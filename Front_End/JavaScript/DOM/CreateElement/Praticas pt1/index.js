const caixa1 = document.querySelector("#caixa1")
const btn_c = [...document.querySelectorAll(".curso")]
const c1_2 = document.querySelector("#c1_2")

/*

// criar novo elemento
const novoElemento = document.createElement("div")

// definir atributos desse elemento
novoElemento.setAttribute("id", "c7")
novoElemento.setAttribute("class", "curso c1")

// definir/atribuir o elemento a uma parte do html, como filho
caixa1.appendChild(novoElemento)

// mudar texto do elemento/adicionar
novoElemento.innerHTML = "Novo curso"

console.log(caixa1);

*/

// criando novas divs filho e passando para a div pai
const cursos = ["HTML", "CSS", "JAVASCRIPT", "PHP", "REACT", "MYSQL", "NOVO CURSO"]

// lendo e passando cada valor do array 
cursos.map((el, key) => {

    // criando novo elemento para cada valor do array
    const criarNovoElemento = document.createElement("div")

    // adicionando novos atributos para cada tag criada na passada do valor do array
    criarNovoElemento.setAttribute("id", "c" + key)
    criarNovoElemento.setAttribute("class", "curso c1")

    // adicionando cada valor passado do array para o nova tag criada
    criarNovoElemento.innerHTML = el

    criarNovoElemento.addEventListener("click", (e) => {
        caixa1.removeChild(e.target)
    })

    // anexando a div de cada array criado a sua tag pai
    caixa1.appendChild(criarNovoElemento)
})