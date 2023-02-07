/* 
    SINTAXE:
        function = definicao de funcao
        nome_funcao = o nome dado a funcao
        (parametro) = parametros que serao passados ou nao ha funcao
        {bloco} = bloco que sera executado quando chamado a funcao

        function nome(parametro) {
            bloco
        }
    
    Pode ser passado parametros ou nao ha funcao

    Para a funcao ser executada tem que chama-la

    nome()
*/

function nome() {   //declaracao da funcao
    console.log('me chamou?')
}
nome()  //chamada da funcao, execucao da funcao

console.log('')

function soma2_10() {
    let num1 = 2
    let num2 = 10
    let mult = num1 * num2

    console.log(mult)
}
soma2_10()

console.log('')

function mudarTexto() {
    let d1 = document.getElementById('d1')
    let d2 = document.getElementById('d2')
    let d3 = document.getElementById('d3')

    d1.innerHTML = 'Erro1'
    d2.innerHTML = 'Erro2'
    d3.innerHTML = 'Erro3'
}