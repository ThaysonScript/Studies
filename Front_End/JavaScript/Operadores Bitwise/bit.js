// Operacoes em formato binario

let n1 = 10, n2 = 14
let res = n1 & n2

/*
      &   =    Equivalencia binaria   =    and binario  se 1 e 1, entao 1, se 1 e 0, entao 0, se 0 e 0, entao 0

      |   =    OR binario, se 1 e 1, entao 1, se 1 e 0, entao 1, se 0 e 0, entao 0

      ^   =     OR Exclusivo binario, somente retorna 1 se for 1 e 0, se 0 e 0 ou 1 e 1, entao 0

*/

console.log(res)

/*
    retorna o valor por equivalencia binaria:

    exemplo:

        o numero 11 em binario é: 1011
        o numero 14 em binario é: 1110

        colocando esses binarios um em cima do outro podemos soma-los e encontrar o numero pela equivalencia binaria

        se somar 1 com 1 em binario teremos como retorno 1;
        se somar 1 com 0 em binario tera como retorno o valor 0.

        fazemos isso para todos os valores

        teremos o resultado final binario de: 1010

        e 1010 em binario corresponde o valor: "10" em base decimal ou 10
*/


/*
    DESLOCAMENTO DE BITS (PODE MAIS DE 1 BIT):

    <<      DESLOCAMENTO DA ESQUERDA PARA A DIREITA     =   DOBRA VALOR
    >>      DESLOCAMENTO DA DIREITA PARA A ESQUERDA     =   METADE DO VALOR

    EXEMPLOS:
        se n1 = 10

        n1 binario é: 1010

        deslocar 1 bit: res = n1 << 1
        resultado binario 10100
        valor base 10 = 20
*/

res = n1 << 1

console.log(res)