$(document).ready(function () {
  $("#exampleModalCenter").modal("show");

  $(".modal-body").empty().append('<div class="alert alert-success" role="alert">Uw account is geactiveerd, <br>U wordt doorgestuurd naar de homepage<div>');
  $(".modal-footer").empty();
  $("#exampleModalLongTitle").text("Registratie voltooid");

  setTimeout(function () {
    window.location.replace("./index.php?action=subscriber_home");
  }, 3000);
});