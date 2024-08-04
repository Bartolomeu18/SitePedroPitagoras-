let valueDisplays = document.querySelectorAll(".num");
let interval = 8500;

valueDisplays.forEach((valueDisplays) => {
    let startvalue = 0
    let endvalue = parseInt(valueDisplays.getAttribute("data-val"))
    let duration = Math.floor(interval / endvalue)
    let counter = setInterval(function () {
        startvalue += 1
        valueDisplays.textContent =  startvalue
        if (startvalue == endvalue) {
            clearInterval(counter)
        }
    }, duration)
})
/*texo aparecendo*/
const efeito1 = document.querySelectorAll('.efeito1')
const observador = new IntersectionObserver((aparecer) => {
    aparecer.forEach((entrar) => {
        /*para adicionar uma nova class*/
        if (entrar.isIntersecting) {
            entrar.target.classList.add('efeito01')
        } else {
            entrar.target.classList.remove('efeito01')
        }
    })
})
efeito1.forEach((element) => observador.observe(element))

/*menu responsivo*/

const btnmobile = document.getElementById('btn-mobile')

function toggleMenu() {
    const menu = document.getElementById('menu')
    const btnmobile =document.getElementById('btn-mobile')

    menu.classList.toggle('active')
    btnmobile.classList.toggle('btnactive')
}
/*btnmobile.addEventListener('click', toggleMenu);*/