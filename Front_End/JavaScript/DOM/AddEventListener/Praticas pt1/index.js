const caixa1 = document.querySelector("#caixa1")
const button = document.querySelector("#btn_copiar")
const caixa2 = document.querySelector("#caixa2")

const todoscursos = [...document.getElementsByClassName("curso")]

todoscursos.map((el) => {
    el.addEventListener("click", (event) => {
        const cursos = event.target
        cursos.classList.toggle("selecionado")
        console.log(cursos)
    })
})

button.addEventListener("click", () => {
    const cursoSelecionado = [...document.querySelectorAll(".selecionado")]
    const curso_N_Selecionado = [...document.querySelectorAll(".curso:not(.selecionado)")]
    console.log(curso_N_Selecionado);

    cursoSelecionado.map((el) => {
        caixa2.appendChild(el)
    })

    curso_N_Selecionado.map((el) => {
        caixa1.appendChild(el)
    })

    console.log(cursoSelecionado);
})


// o metodo toggle do classList adiciona o evento ao elemento se o evento não já tiver ativo e se ativo ele remove o evento


/*
appendChild = adicionar/mover algo/elemento ao elemento/tag filho

Exemplo:
    div class="caixa1" adicionando o toggle, as propriedades que foram adicionadas na div class caixa1 serão movidas para uma div class="caixa2" por exemplo
*/

//tag:not(elemento nao selecionado) =   retorna os elementos que nao foram selecionados por alguma propriedade