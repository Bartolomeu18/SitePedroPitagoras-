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
  /*  
    document.getElementById("menu").style.backgroundColor = "red";*/
  menu.classList.toggle('active')
  btnmobile.classList.toggle('btnactive')
}
/*btnmobile.addEventListener('click', toggleMenu);*/