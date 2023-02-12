let num = 10

// sintaxe do operador ternario
let res = !(num % 2) ? "Par" : "Impar"

// se num%2 = 0, vai cair em impar, pois 0 é false

// se num%2 = 1, vai cair em par, pois 1 é true

// para funcionar negamos a operacao num%2

console.log(res)