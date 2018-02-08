$(document).ready(function() {
  $("#ModalCenter").modal('show');
  $(".modal-body").empty()
                  .append("<p>U bent succesvol geregistreerd. U krijgt een email met activatielink.</p>");
  $(".modal-footer").empty();

  // Timertje
  setTimeout(function() {
    window.location.replace("./index.php");
  }, 2500);
});