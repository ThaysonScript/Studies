function carregar() {
    var mensagem = window.document.getElementById('mensagem')
    var img = window.document.getElementById('imagem')
    var data = new Date()
    var horaAtual = data.getHours()

    mensagem.innerHTML = `Agora são ${horaAtual} horas.`

    if(horaAtual < 12) {
        img.src = 'manha.png'
        document.body.style.backgroundColor = '#846e00'
    } else if(horaAtual >= 12 && horaAtual <= 17) {
        img.src = 'tarde.png'
        document.body.style.backgroundColor = '#ffe046'
    } else if(horaAtual >= 18) {
        img.src = 'noite.png'
        document.body.style.backgroundColor = '#ff6600'
    }
}