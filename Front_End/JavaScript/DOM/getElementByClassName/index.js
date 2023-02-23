const fullcourse = [...document.getElementsByClassName("curso")]

console.log(fullcourse)

const coursesc1 = [...document.getElementsByClassName("c1")]
const coursesc2 = [...document.getElementsByClassName("c2")]

console.log(coursesc1)
console.log(coursesc2)

const especialcourse = document.getElementsByClassName("curso")[0]

console.log(especialcourse)

/*
fullcourse.map((el) => {
    el.classList.add("importante")
})
*/

/*
coursesc1.map((el) => {
    el.classList.add("importante")
})
*/

coursesc2.map((el) => {
    el.classList.add("importante")
})