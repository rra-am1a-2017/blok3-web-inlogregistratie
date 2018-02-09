$(document).ready(function(){
  // 
  $("#ModalCenter").modal("show");

  $("#emailExists").after("<p id='emailExistsStyle'>U heeft geen e-mailadres ingevuld</p>");

  $("#emailExistsStyle").css({"border" : "1px solid #ced4da",
                              "border-radius" : "0.25rem",
                              "padding" : ".375rem .75rem",
                              "color" : "red"});




});