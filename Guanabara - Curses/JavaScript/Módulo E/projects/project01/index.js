function clicar() {
    let inicio = window.document.getElementById('inicio').value
    let fim = window.document.getElementById('fim').value
    let passo = window.document.getElementById('passo').value
    let result = window.document.getElementById('res')

    

    if(inicio.length == 0 || fim.length == 0 || passo.length == 0) {
        result.innerHTML = 'impossivel contar'
        window.alert('Não consigo contar')
    } else {
        result.innerHTML = 'Contanto: <br>'

        inicio = parseInt(inicio)
        fim = parseInt(fim)
        passo = parseInt(passo)

        if(passo <= 0) {
            window.alert('passo invalido, considenrando passo = 1')
            passo = 1
        }

        // contagem crescente
        if(inicio < fim) {
            while(inicio <= fim) {
                result.innerHTML += `${inicio} \u{1F603}`
                inicio += passo
            }
        } else {
            // contagem decrescente
            for(inicio; inicio >= fim; inicio -= passo) {
                result.innerHTML += `${inicio} \u{1F603}`
            }
        }
        result.innerHTML += `\u{1F3C1}`
    }
}