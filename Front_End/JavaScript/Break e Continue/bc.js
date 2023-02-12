let num = 0
let max = 1000

//  O break interrompe todo o laço/bloco
while(num <= max) {
    console.log(`O numero iterado foi: ${num}`)
    if(num >= 10) {
        break
    }
    num++
}

console.log('fim de looping')

console.log('')

let pares = 0

for(let i = 0; i < max; i++) {
    if(i % 2 != 0) {
        continue
    }
    pares++
}
console.log(`A quantidade de pares iterados foi: ${pares}`)
console.log('fim de loop')