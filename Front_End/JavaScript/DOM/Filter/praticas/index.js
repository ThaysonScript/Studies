const caixaCursos = document.querySelector("#caixaCursos")

const btn_cursos = [...document.querySelectorAll(".curso")]

const c1_2 = document.querySelector("#c1_2")

const cursos = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP', 'REACT', 'MYSQL', 'REACTNATIVE']

const btnCursoSelecionado = document.getElementById("btnCursoSelecionado")

const btnRemoveCurso = document.getElementById("btnRemoverCurso")

const btnAdicionarNovoCursoAntes = document.getElementById("btnAdicionarNovoCursoAntes")

const btnAdicionarNovoCursoDepois = document.getElementById("btnAdicionarNovoCursoDepois")

const nomeCurso = document.getElementById("nomeCurso")

// Parte do curso selecionado

let indice = 0

const criarNovoCurso = (curso) => {
        //new create element
        const novoElemento = document.createElement("div")

        //add new atributtes
        novoElemento.setAttribute("id", "c" + indice)
        novoElemento.setAttribute("class", "curso 1")
    
        //add new content in created element
        novoElemento.innerHTML = curso
    
        // create div element with class comandos
        const comandos = document.createElement("div")
        comandos.setAttribute("class", "comandos")
    
        // create new input element with type radio and name = rb_curso
        const rb = document.createElement("input")
        rb.setAttribute("type", "radio")
        rb.setAttribute("name", "rb_curso")
    
        //add rb in comandos
        comandos.appendChild(rb)
    
        //add comandos in novoElemento
        novoElemento.appendChild(comandos)

        return novoElemento
}
cursos.map((el, key) => { // key = indice
    const novoElemento = criarNovoCurso(el)

    //add novoElemento in caixaCursos
    caixaCursos.appendChild(novoElemento)
    indice++
})

const radioSelecionado = () => {
    const todosRadios = [...document.querySelectorAll("input[type=radio]")]

    const radioSelecionado = todosRadios.filter((elemento) => {
        return elemento.checked
    })
    return radioSelecionado[0]
}

btnCursoSelecionado.addEventListener("click", (e) => {
    const rs = radioSelecionado()
    // if (rs !== undefined) {
    //     const cursoSelecionado = rs.parentNode.previousSibling.textContent
    //     alert("Curso Selecionado: " + cursoSelecionado)
    // } else {
    //     alert("Selecione um Curso!" )
    // }

    // Recomendado usar trycatch
    try { //faça isso
        const cursoSelecionado = rs.parentNode.previousSibling.textContent
        alert("Curso Selecionado: " + cursoSelecionado)
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
    const rs = radioSelecionado()
    if (rs !== undefined) {
        const cursoSelecionado = rs.parentNode.parentNode
        cursoSelecionado.remove()
    } else {
        alert("Selecione um Curso!" )
    }
})

// parte do adicionar elementos antes e depois

btnAdicionarNovoCursoAntes.addEventListener("click", () => {
    try { //faça isso
        if (nomeCurso.value != "") {
            const cursoSelecionado = rs.parentNode.parentNode

            const novoCurso = criarNovoCurso(nomeCurso.value)

            // insertBefore   =    inserir algo antes
            caixaCursos.insertBefore(novoCurso, cursoSelecionado)
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
            const cursoSelecionado = rs.parentNode.parentNode

            const novoCurso = criarNovoCurso(nomeCurso.value)

            // insertBefore   =    inserir algo antes
            caixaCursos.insertBefore(novoCurso, cursoSelecionado.nextSibling)
        } else {
            alert("Digite o Nome do Curso!" )
        }

    } catch (error) { // se der erro execute isso
        alert("Selecione um Curso!" )
    }
})