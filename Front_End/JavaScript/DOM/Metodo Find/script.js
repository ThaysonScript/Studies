const p_array = document.querySelector("#array")
const txt_pesquisar = document.querySelector("#txt_pesquisar")
const btnPesquisar = document.querySelector("#btnPesquisar")
const resultado = document.querySelector("#resultado")

const elementos_array = [10, 5, 6, 2, 9, 15, 20]

p_array.innerHTML = "[" + elementos_array + "]"

btnPesquisar.addEventListener("click", (event) => {
    const p =elementos_array.find((element, indice, array) => { // itera o array até achar o valor procurado, entao retorna true, senao encontrar retorna undefined

        if (element == txt_pesquisar.value) { // retornar true automaticamente se encontrado
            resultado.innerHTML = "O valor buscado foi: " + element + " na posicao: " + indice
            return element  // reforçando o retorno verdadeiro
        } else {
            resultado.innerHTML = "O valor buscado nao foi encontrado"
        }

    })
    console.log(p);
})