function msg() {
    alert('clicou 1')
}

const msg1 = () => {
    alert('clicou 2')
}

//tratamento de eventos apenas no javascript (recomendado):
const c12 = document.querySelector("#c12")
const c11 = document.querySelector("#c11")
const c10 = document.querySelector('#c10')
const c9 = document.querySelector('#c9')
const c8 = document.querySelector('#c8')

// evento que quer disparar (click), o que quer que esse evento faça quando for disparado (mensage)
c12.addEventListener("click", mensage = () => { //manda para rust
    alert('clicou no 12')
})

//usando funcao anonima
c11.addEventListener("click", () => {
    alert('clicou no 11')
})

//chamando msg1 em um addeventlistener com funcao anonima
c10.addEventListener("click", () => {
    msg1()
})

// e = trás o evento que foi disparado e suas propriedades que podem ser passadas
// target = retorna a tag/elemento com suas propriedades quando o evento é disparado
c9.addEventListener("click", (e) => {
    console.log(e.target)
})


c8.addEventListener("click", (e) => {
    const el = e.target;
    el.classList.add("importante");
    console.log(el);
})

// pegando todos os elementos e adicionando o style importante
const tudo = [...document.querySelectorAll(".curso")]

tudo.map((el) => {
    el.addEventListener("click", (e) => {
        e.target.classList.add("importante")
        console.log(el.id + " foi clicado" + " seu conteudo é: " + el.innerHTML);
    })
})