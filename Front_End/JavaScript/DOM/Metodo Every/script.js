const p_array = document.querySelector("#array")
const btnVerificar = document.querySelector("#btnVerificar")
const resultado = document.querySelector("#resultado")

const elementos_array = [21, 25, 19, 20, 16, 18, 22]
p_array.innerHTML = "[" + elementos_array + "]"

btnVerificar.addEventListener("click", (event) => {
    const ret = elementos_array.every((element, indice, array) => {
        if (element >= 16) {
            resultado.innerHTML = "Array conforme"
            return element
        } else {
            resultado.innerHTML = `Array nao conforme na posicao ${indice}`
        }
    })

    console.log(ret);
})

// every    =   ler todos os valores no array e faz uma comparacao para todos, se todos passarem na comparacao, entao true, senao false