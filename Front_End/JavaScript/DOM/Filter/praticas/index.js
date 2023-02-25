const caixaCursos = document.querySelector("#caixaCursos")
const btn_cursos = [...document.querySelectorAll(".curso")]
const c1_2 = document.querySelector("#c1_2")
const cursos = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP', 'REACT', 'MYSQL', 'REACTNATIVE']
const btnCursoSelecionado = document.getElementById("btnCursoSelecionado")

cursos.map((el, key) => { // key = indice
    //new create element
    const novoElemento = document.createElement("div")

    //add new atributtes
    novoElemento.setAttribute("id", "c" + key)
    novoElemento.setAttribute("class", "curso 1")

    //add new content in created element
    novoElemento.innerHTML = el

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

    //add novoElemento in caixaCursos
    caixaCursos.appendChild(novoElemento)
})