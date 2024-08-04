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
/*efeito de contagem*/
const contagem = document.querySelectorAll(".mun")
const interval = 4000
contagem.forEach((contagem) => {
  const valin = 0
  const valfin = parseInt(contagem.getAttribute("data-val"))
  const duracao = Math.floor(interval / valfin)
  const contar = setInterval(function () {
    valin += 1
    contagem.textContent = valin
    if (valin == valfin) {
      clearInterval(contar)
    }
  }, duration)
})