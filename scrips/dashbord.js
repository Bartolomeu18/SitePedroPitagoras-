//elemntos que apareceram
const infor = document.getElementById('conteudo')
const rendimento = document.getElementById('rendimento')
const noti = document.getElementById('noti')
const materias = document.getElementById('materias')
const administrador = document.getElementById('admin')
const secreta = document.getElementById('secret')
const coordena =document.getElementById('coord')
const professor = document.getElementById('prof')
const aluno =document.getElementById('aluno')
const contpaga = document.getElementById('contpaga')
// modal add_user
function add_close(){
   const add = document.getElementById('add_back') 
   add.classList.add('on')
   add.addEventListener('click',(e)=>{
    if(e.target.id == 'x_circle'||e.target.id == 'add_back'){
      add.classList.remove('on')
    }
   })
}



//functio rendimento
function rendi(){

  if(rendimento.style.display !== "block"){
     rendimento.style.display ="block"
     infor.style.display = "none"
     noti.style.display = "none"  
     materias.style.display = "none"
     administrador.style.display ="none"
     secreta.style.display ="none"
     coordena.style.display="none" 
     professor.style.display ="none"
     aluno.style.display ="none"
     contpaga.style.display ="none"

  }}
  
function inf(){
infor.style.display ="block"
if(infor.style.display == "block"){
   
   rendimento.style.display = "none"
   noti.style.display = "none"  
   materias.style.display = "none"
   administrador.style.display ="none"
   secreta.style.display ="none"
   coordena.style.display="none"
   professor.style.display ="none"
   aluno.style.display ="none"
   contpaga.style.display ="none"

}}

function notif(){

  if(noti.style.display !== "block"){
     noti.style.display ="block"
     rendimento.style.display = "none"
     infor.style.display = "none"  
     materias.style.display = "none"
     administrador.style.display ="none"
     secreta.style.display ="none"
     coordena.style.display="none" 
     professor.style.display ="none"
     aluno.style.display ="none"
     contpaga.style.display ="none"

  }}
   // function matérias
function maté(){
   if(materias.style.display !== "block"){

     infor.style.display ="none"
      rendimento.style.display = "none"
          materias.style.display = "block"
          noti.style.display = "none"  
          administrador.style.display ="none"
          secreta.style.display ="none"
          coordena.style.display="none" 
          professor.style.display ="none"
          aluno.style.display ="none"
          contpaga.style.display ="none"

   }}
/* extras funções para a tela do administrador*/
function admi(){

   if(administrador.style.display !== "block"){
      administrador.style.display ="block"
     infor.style.display ="none"
      rendimento.style.display = "none"
          materias.style.display = "none"
          noti.style.display = "none"  
         secreta.style.display ="none"
         coordena.style.display="none"
         professor.style.display ="none"
         aluno.style.display ="none"
         contpaga.style.display ="none"

   }}
   function secretaria(){
      if(secreta.style.display !== "block"){
         secreta.style.display ="block"
         administrador.style.display ="none"
        infor.style.display ="none"
         rendimento.style.display = "none"
             materias.style.display = "none"
             noti.style.display = "none" 
             coordena.style.display="none" 
             professor.style.display ="none"
             aluno.style.display ="none"
             contpaga.style.display ="none"

      }}
      function coordenador(){
         if(coordena.style.display !== "block"){
            coordena.style.display ="block"
            secreta.style.display ="none"
            administrador.style.display ="none"
           infor.style.display ="none"
            rendimento.style.display = "none"
                materias.style.display = "none"
                noti.style.display = "none"  
            professor.style.display ="none"
            aluno.style.display ="none"
            contpaga.style.display ="none"
         }}               

         function profe(){
            if(professor.style.display !== "block"){
               professor.style.display ="block"
               coordena.style.display="none" 
               secreta.style.display ="none"
               administrador.style.display ="none"
              infor.style.display ="none"
               rendimento.style.display = "none"
                   materias.style.display = "none"
                   noti.style.display = "none"  
                   aluno.style.display ="none"
                   contpaga.style.display ="none"
            }}
            function alunos(){
               if(aluno.style.display !== "block"){
                  aluno.style.display ="block"
                  professor.style.display ="none"
                  coordena.style.display="none" 
                  secreta.style.display ="none"
                  administrador.style.display ="none"
                 infor.style.display ="none"
                  rendimento.style.display = "none"
                      materias.style.display = "none"
                      noti.style.display = "none"  
                      contpaga.style.display ="none"
               }}
               function paga(){
                  if(contpaga.style.display !== "block"){
                     contpaga.style.display ="block"
                     professor.style.display ="none"
                     coordena.style.display="none" 
                     secreta.style.display ="none"
                     administrador.style.display ="none"
                    infor.style.display ="none"
                     rendimento.style.display = "none"
                         materias.style.display = "none"
                         noti.style.display = "none"  
                         aluno.style.display ="none"
                  }}    
               


/*modal cadastro administradores*/
const closer = document.getElementById('cadastro_modal')
function closes(){
   closer.style.display="none"


   }

   function opening(){
      closer.style.display="block"
        }


/*menu responsivo*/
const btn = document.getElementById('btn-mobile')
const mobile = document.querySelector("#menu-mobile")
btn.addEventListener("click",() => {

//console.log("clickou")
if(mobile.style.display !=="block"){
mobile.style.display ="block"
}else{
mobile.style.display ="none"
}
//cor do  botão 
if(btn.style.backgroundColor !=="white"){
btn.style.backgroundColor ="white"
}else{
btn.style.backgroundColor ="#D46B20"
}
})


//função  para modal notificações
/*
function umprofessor(){
   const myform = document.getElementById('form');
   const mymodal = document.getElementById('mymodal');

   myform.action ='verification_notification_prof.php';
   mymodal.style.display="none";

 }

 function todosprofessores(){
   
console.log("erros");
   const mymodal = document.getElementById('mymodal');
   mymodal.style.display="none";

 }*/ 
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

// botão para activar a comfirmação

