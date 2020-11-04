<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/jquery.js" ></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/funciones.js"></script>
</head>

<body>

  <form onsubmit="return nuevoU()" class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">First name</label>
      <input type="text" class="form-control" id="vali" nae="nombre" required onkeyup="bot2()">
      <div class="invalid-feedback" id="1">
        Please provide a valid city.
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Second name</label>
      <input type="text" class="form-control" id="vali2" nae="nombre2" required onkeyup="bot()">
      <div class="invalid-feedback" id="1">
        Please provide a valid city.
      </div>
    </div>

  <input class="btn btn-primary" type="submit" id ="boton" hidden>
</form>


</body>
</html>
<?php
  #$nombre = $_POST['nombre'];
  #echo "Hola ".$nombre;
 ?>
