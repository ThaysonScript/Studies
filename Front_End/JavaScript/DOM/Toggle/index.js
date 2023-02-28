const caixaCursos = document.querySelector("#caixaCursos")

const btn_c = [...document.querySelectorAll(".curso")]

const c1_2 = document.querySelector("#c1_2")

const cursos = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP', 'REACT', 'MYSQL', 'REACTNATIVE']

const btnCursoSelecionado = document.getElementById("btnCursoSelecionado")

const btnRemoveCurso = document.getElementById("btnRemoverCurso")

const btnAdicionarNovoCursoAntes = document.getElementById("btnAdicionarNovoCursoAntes")

const btnAdicionarNovoCursoDepois = document.getElementById("btnAdicionarNovoCursoDepois")

const nomeCurso = document.getElementById("nomeCurso")

// Parte do curso selecionado

let indice = 0

const tirarSelecao = () => {
    const cursoSelecionado = [...document.querySelectorAll(".selecionado")]
    cursoSelecionado.map((element) => {
        element.classList.remove("selecionado")
    })
}

const criarNovoCurso = (curso) => {
        //new create element
        const novoElemento = document.createElement("div")

        //add new atributtes
        novoElemento.setAttribute("id", "c" + indice)
        novoElemento.setAttribute("class", "curso c1")
    
        //add new content in created element
        novoElemento.innerHTML = curso
    
        novoElemento.addEventListener("click", (event) => {
            tirarSelecao()
            event.target.classList.toggle("selecionado") // toggle  =   adiciona ou remove uma classe css
        })

        return novoElemento
}
cursos.map((el, key) => { // key = indice
    const novoElemento = criarNovoCurso(el)

    //add novoElemento in caixaCursos
    caixaCursos.appendChild(novoElemento)
    indice++
})

const cursoSelecionado = () => {
    const cursosSelecionados = [...document.querySelectorAll(".selecionado")]

    return cursosSelecionados[0]
}

btnCursoSelecionado.addEventListener("click", (e) => {
    // if (rs !== undefined) {
    //     const cursoSelecionado = rs.parentNode.previousSibling.textContent
    //     alert("Curso Selecionado: " + cursoSelecionado)
    // } else {
    //     alert("Selecione um Curso!" )
    // }

    // Recomendado usar trycatch
    try { //faça isso
        alert("Curso Selecionado: " + cursoSelecionado().innerHTML)
    } catch (error) { // se der erro execute isso
        alert("Selecione um Curso!" )
    }

})

/*
    parentNode
    childNodes[nodenumber]
    firstChild
    lastChild
    nextSibling
    previousSibling
*/



//parte do remover selecionado


btnRemoveCurso.addEventListener("click", (e) => {
    const cs = cursoSelecionado()
    if (cs !== undefined) {
        cs.remove()
    } else {
        alert("Selecione um Curso!" )
    }
})

// parte do adicionar elementos antes e depois

btnAdicionarNovoCursoAntes.addEventListener("click", () => {
    try { //faça isso
        if (nomeCurso.value != "") {
            const novoCurso = criarNovoCurso(nomeCurso.value)

            // insertBefore   =    inserir algo antes
            caixaCursos.insertBefore(novoCurso, cursoSelecionado())
        } else {
            alert("Digite o Nome do Curso!" )
        }

    } catch (error) { // se der erro execute isso
        alert("Selecione um Curso!" )
    }
})

btnAdicionarNovoCursoDepois.addEventListener("click", (event) => {
    try { //faça isso
        if (nomeCurso.value != "") {

            const novoCurso = criarNovoCurso(nomeCurso.value)

            // insertBefore   =    inserir algo antes
            caixaCursos.insertBefore(novoCurso, cursoSelecionado().nextSibling)
        } else {
            alert("Digite o Nome do Curso!" )
        }

    } catch (error) { // se der erro execute isso
        alert("Selecione um Curso!" )
    }
})