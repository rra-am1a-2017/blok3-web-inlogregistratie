$(document).ready(function(){
  // 
  $("#ModalCenter").modal("show");

  $("#emailHelp").empty().append("Gebruik een ander emailadres.");

  $("#emailExists").after("<p id='emailExistsStyle'>Gebruik een ander emailadres.</p>");

  $("#emailExistsStyle").css({"border" : "1px solid #ced4da",
                              "border-radius" : "0.25rem",
                              "padding" : ".375rem .75rem",
                              "color" : "red"});




});