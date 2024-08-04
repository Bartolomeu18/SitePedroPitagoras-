// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("openModalBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}


// Function to handle submission
document.getElementById("submitBtn").addEventListener("click", function() {
  var studentId = document.getElementById("studentId").value;
  if (studentId <= 0 ) {
    alert("ID não exitente");
  } else {
      alert("ID do Aluno: " + studentId);
  }

  // Aqui você pode adicionar a lógica para enviar o ID do aluno para onde precisar
  modal.style.display = "none"; // Fechar o modal após enviar
});
