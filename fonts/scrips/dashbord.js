//elemntos que apareceram
const infor = document.getElementById('conteudo')
const rendimento = document.getElementById('rendimento')
const noti = document.getElementById('noti')



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
  }}
  
function inf(){

if(infor.style.display !== "block"){
   infor.style.display ="block"
   rendimento.style.display = "none"
   noti.style.display = "none"  
}}

function notif(){

  if(noti.style.display !== "block"){
     noti.style.display ="block"
     rendimento.style.display = "none"
     infor.style.display = "none"  
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