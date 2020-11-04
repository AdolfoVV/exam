(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

function bot() {
  //alert("J");
 var nombre = document.getElementById("vali");
 var apellido = document.getElementById("vali2");
  console.log(nombre.value.length);
  console.log(apellido.value.length);

  if((apellido.value.length<=0 || apellido.value.indexOf(" ") == 0) || (nombre.value.length<=0)){
        $('#boton').attr('hidden',true);
  }else{
      $('#boton').attr('hidden',false);
  }
}

function bot2(){
  var nombre = document.getElementById("vali");
  var apellido = document.getElementById("vali2");

  if((nombre.value.length<=0 || nombre.value.indexOf(" ") == 0) || (apellido.value.length<=0)){
        $('#boton').attr('hidden',true);
    }else{
      $('#boton').attr('hidden',false);
    }
}



function nuevoU() {
    var id = document.getElementById("vali");


    if (id.value == "" || id.value.indexOf(" ") == 0) {
        $('#vali').attr('required',true);

        return false;
    }


  }
