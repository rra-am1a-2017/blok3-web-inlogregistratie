$(document).ready(function(){
  $("#ModalCenter").modal("show");

  $(".form-check").after("<p id='emailExistsStyle'>Ga akkoord met de algemene voorwaarden</p>");

  $("#emailExistsStyle").css({"border" : "1px solid #ced4da",
                              "border-radius" : "0.25rem",
                              "padding" : ".375rem .75rem",
                              "color" : "red"});



});