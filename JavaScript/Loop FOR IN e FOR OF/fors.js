let nums = [10, 20, 30, 40, 50]

// FOR tradicional lendo cada numero em um array
for(let i = 0; i < nums.length; i++) {
    console.log(nums[i])
}

console.log('')

// FOR que percorre os indices dos elementos
for(n in nums) {
    console.log(n)
}

console.log('')

// FOR que percorre o valor dos elementos do array
for(n of nums) {
    console.log(n)
}