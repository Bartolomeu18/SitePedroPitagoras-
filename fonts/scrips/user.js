//elemntos que apareceram
    const infor = document.getElementById('conteudo')
    const pagamento = document.getElementById('conteudopagamento')
    const rendimento = document.getElementById('rendimento')
    const notas = document.getElementById('notas')
    const materias = document.getElementById('materias')
    const horario = document.getElementById('horario')
    const noti = document.getElementById('noti')

    infor.style.display ="block"
    
function inf(){

  if(infor.style.display !== "block"){
       infor.style.display ="block"
       pagamento.style.display = "none"
       rendimento.style.display = "none"
       notas.style.display = "none"
       materias.style.display = "none"
       horario.style.display = "none"
       noti.style.display = "none"  
    }}
//function pagamanto
function paga(){

if(pagamento.style.display !== "block"){
  pagamento.style.display = "block"
  infor.style.display ="none"
   rendimento.style.display = "none"
       notas.style.display = "none"
       materias.style.display = "none"
       horario.style.display = "none"
       noti.style.display = "none"  
}}
//functio rendimento
function rendi(){

  if(rendimento.style.display !== "block"){
    pagamento.style.display = "none"
    infor.style.display ="none"
     rendimento.style.display = "block"
         notas.style.display = "none"
         materias.style.display = "none"
         horario.style.display = "none"
         noti.style.display = "none"  
  }}
// function notas
function nota(){

  if(notas.style.display !== "block"){
    pagamento.style.display = "none"
    infor.style.display ="none"
     rendimento.style.display = "none"
         notas.style.display = "block"
         materias.style.display = "none"
         horario.style.display = "none"
         noti.style.display = "none"  
  }}
  // function matérias
function maté(){

  if(materias.style.display !== "block"){
    pagamento.style.display = "none"
    infor.style.display ="none"
     rendimento.style.display = "none"
         notas.style.display = "none"
         materias.style.display = "block"
         horario.style.display = "none"
         noti.style.display = "none"  
  }}
  //functio horario
  function hora(){

    if(materias.style.display !== "block"){
      pagamento.style.display = "none"
      infor.style.display ="none"
       rendimento.style.display = "none"
           notas.style.display = "none"
           materias.style.display = "none"
           horario.style.display = "block"
           noti.style.display = "none"  
    }}

      //functio noti
  function notif(){

    if(materias.style.display !== "block"){
      pagamento.style.display = "none"
      infor.style.display ="none"
       rendimento.style.display = "none"
           notas.style.display = "none"
           materias.style.display = "none"
           horario.style.display = "none"
           noti.style.display = "block"  
    }}

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


