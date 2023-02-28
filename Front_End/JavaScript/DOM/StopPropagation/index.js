const caixa1 = document.querySelector("#caixa1")
const btn = [...document.querySelectorAll(".curso")]

caixa1.addEventListener("click", (e) => {
    alert("clicado na caixa") 
    console.log("evento acionado:");
    console.log(e.target);
})

btn.map((el) => {
    el.addEventListener("click", (e) => {
        e.stopPropagation()
        console.log("evento foi parado:");
        console.log(e.target);
    })
})
