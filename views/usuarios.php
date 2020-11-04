<html>
<head>
	<link rel="stylesheet" type="text/css" href="content/css/miestilo1.css">
</head>

<?php require_once('comunes/cabecera.php');?>

<?php 
$servidor = "localhost";
$usuario = "root";
$clave = "";
$basededatos = "urbanizacion";

$enlace = mysqli_connect($servidor,$usuario,$clave,$basededatos);

if (!$enlace){
	echo "no existe";
}
 ?>	

<body>

<div>
   <nav class="navbar navbar-expand-lg navbar-light bg-danger"> 
        <img src="content/imagenes/logo.jpg" alt="" style="width:80px; height:60px; border-radius:15px;">
		<label class="navbar-brand font-weight-bold">USUARIO</label>
  </nav>
</div>  

<div style="width: 450px; margin: auto; opacity: 0.95;"> <!-- todo el contenido ira dentro de esta etiqueta-->

<form method="POST" action="" id="f">
<div class="rounded shadow-lg bg-white rounded"style="background:white; padding: 30px 40px 15px 40px;">
	<div><h4 class="bg-primary text-center p-1 rounded font-weight-bold">REGISTRO DE USUARIO</h4></div>
    <div class="row">
		<div class="col">
		   <label  class="text-dark font-weight-bold" for="cedula">Cedula:</label>
		   <input class="form-control border border-dark" type="text" id="cedula" name="cedula" />
		   <span id="scedula"></span>
		</div>
	</div>

    <div class="row">
		
		<div class="col">
		   <label class="text-dark font-weight-bold" for="usuario">Correo:</label>
		   <input class="form-control border border-dark" type="text" id="correo" name="correo" />
		</div>

	</div>


    <div class="row">
		
		<div class="col">
		   <label class="text-dark font-weight-bold" for="usuario">Usuario:</label>
		   <input class="form-control border border-dark" type="text" id="usuario" name="usuario" />
		</div>
	</div>
	<div class="row">
		
		<div class="col">
		   <label class="text-dark font-weight-bold" for="clave">Clave:</label>
		   <input class="form-control border border-dark" type="password" id="clave" name="clave" />
		</div>

		<div class="col">
		   <label class="text-dark font-weight-bold" for="clave">Repetir clave:</label>
		   <input class="form-control border border-dark" type="password" id="clave" name="clave" />
		</div>
		
	</div>

		<div class="row d-flex justify-content-center">
		<div>
			   <input type="submit" class="btn btn-danger font-weight-bold m-3" id="crear" name="crear" value="REGISTRARSE">
		</div>
		<div>	
			   <a href="." class="btn btn-danger font-weight-bold m-3">REGRESAR</a>
		</div>
	</div>

</div>

</form>

</div> <!-- fin de container -->

<!-- seccion del modal -->
<div class="modal fade" tabindex="-1" role="dialog"  id="modal1">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-header text-light bg-info">
        <h5 class="modal-title">Listado de Usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
  </div>
</div>
<!--fin de seccion modal-->
</body>
</html>

<?php 
if(isset($_POST['crear'])){
	$cedula = $_POST["cedula"];
	$correo = $_POST["correo"];
	$usuario = $_POST["usuario"];
	$clave = $_POST["clave"];

	$insertarDatos = "INSERT INTO registro_usuario VALUES('$cedula','$correo','$usuario','$clave')";

	$ejecutarInsertar = mysqli_query($enlace,$insertarDatos);
}
?>