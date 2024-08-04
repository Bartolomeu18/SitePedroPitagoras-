//função  para modal notificações

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

 }