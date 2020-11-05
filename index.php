<?php
include "querys.php";
include "conexion.php";

$connection = conexion();
$query = ConsultarMinimo();

$executequery = mysqli_query($connection,$query) or die (mysqli_error($connection));


?>

<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
  <script src="js/jquery.js" ></script>
  <script src="js/bootstrap.min.js"></script>

  <script src="js/funciones.js"></script>
    <script src="js/datatables.min.js"></script>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
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

    <?php
    while($viewquery = mysqli_fetch_array($executequery)){
      //print_r($viewquery);
      echo "<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-autohide='false'>
    <div class='toast-header'>

      <strong class='mr-auto text-danger'>Alerta</strong>
      <small class='text-muted'>".idate("H").":".idate("m").":".idate("s")."</small>
      <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div>
    <div class='toast-body text-danger'>
      El producto " .$viewquery['nom_produc']." ha alcanzado la cantidad minima en bodega, cantidad minima=".$viewquery['can_min_bod']." cantidad en existencia=".$viewquery['cantidad_disponible'].".
    </br>Sugerencia : reponer en bodega</div>
  </div>
  "."</br>";
    }

?>

<!-- Flexbox container for aligning the toasts -->

  <input class="btn btn-primary" type="submit" id ="boton" hidden>
</form>

<table class="table table-sm" id ="tabla12">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>

  </tbody>
</table>
<table  class="display table table-sm table-dark">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>apellidos</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>

    </tr>
  </tbody>

</table>

<!--<table id="tabla1" class="display table table-sm table-dark">
        <thead>
            <tr>
                <th scope = "col">Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>


        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>-->


</body>
<script>
  $(document).ready( function () {
  //  $('#tabla1').DataTable();
    $('#tabla12').DataTable();
});
</script>
</html>
<?php
  #$nombre = $_POST['nombre'];
  #echo "Hola ".$nombre;
 ?>
