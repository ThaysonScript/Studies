function verificar() {
    var data = new Date();
    var dataAtual = data.getFullYear();
    var idade = window.document.getElementById('idade');
    var result = window.document.querySelector('div#res');

    if(idade.value == 0 || idade.value >= dataAtual) {
        window.alert('Vazio ou idade maior que o ano atual');
    } else {
        var gensex = window.document.getElementsByName('sexradio');
        var qtd_ano = dataAtual - parseInt(idade.value);
        var genero;

        // criar elemento html dentro do javascript e atribuir id = foto
        var img = window.document.createElement('img');
        img.setAttribute('id', 'foto');
        if(gensex[0].checked){
            genero = 'Homem';
            if(qtd_ano >= 0 && qtd_ano <= 15){
                //crianç
                img.setAttribute('src', 'crianM.png')
            } else if(qtd_ano <= 18){
                //jovem
                img.setAttribute('src', 'jovemM.png')
            } else if(qtd_ano <= 55){
                //adulto
                img.setAttribute('src', 'adultM.png')
            } else if(qtd_ano >= 55) {
                //idoso
                img.setAttribute('src', 'idosoM.png')
            };
        } else if(gensex[1].checked) {
            genero = 'Mulher';
            if(qtd_ano >= 0 && qtd_ano <= 15){
                //crianç
                img.setAttribute('src', 'crianF.png')
            } else if(qtd_ano <= 18){
                //jovem
                img.setAttribute('src', 'jovemF.png')
            } else if(qtd_ano <= 55){
                //adulto
                img.setAttribute('src', 'adultF.png')
            } else if(qtd_ano >= 55) {
                //idoso
                img.setAttribute('src', 'idosoF.png')
            };
        };
        res.style.textAlign = 'center';
        res.innerHTML = `Detectamos ${genero} com ${qtd_ano} anos.`;
        res.appendChild(img)
    };
};