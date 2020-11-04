<html>
<head>
	<link rel="stylesheet" type="text/css" href="content/css/miestilo1.css">
</head>
<?php require_once('comunes/cabecera.php'); ?>
<body>

<div>
  
   <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <button class="navbar-toggler bg-light border border-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button> 
        <img src="content/imagenes/logo.jpg" alt="" style="width:80px; height:60px; border-radius:15px;">
		<label class="navbar-brand text-white font-weight-bold">Viviendas</label>
		<?php require_once('comunes/menu.php'); ?>
		
  </nav>
</div>  

<div class="container rounded-bottom shadow-lg mb-5 bg-white rounded"style="padding: 0px 10px 15px 10px; opacity: 0.95; position: relative; top:30px;">
<div>
	<ul class="nav nav-tabs bg-primary rounded" role="tablist">
	  <li class="nav-item">
		<a class="nav-link active text-dark font-weight-bold" href="#dptn" role="tab" data-toggle="tab">Casa</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link text-dark font-weight-bold" href="#dpropietario" role="tab" data-toggle="tab">Propietario</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link text-dark font-weight-bold" href="#dinquilino" role="tab" data-toggle="tab">Inquilinos</a>
	  </li>
	</ul>
</div>


	<div class="tab-content">
	  <div role="tabpanel" class="tab-pane active" id="dptn">
		<div class="container"> <!-- todo el contenido ira dentro de esta etiqueta-->
			<form method="post" action="" id="fptn">

				<div class="row">
					<div class="col">
					   <label class="text-dark font-weight-bold" for="piso">Manzana:</label>
					   <input class="form-control border border-dark" type="text" id="piso" name="piso" />
					   <span id="spiso"></span>
					</div>
				</div>

				<div class="row">
					<div class="col">
					   <label class="text-dark font-weight-bold" for="torre">Numero:</label>
					   <input class="form-control border border-dark" type="text" id="torre" name="torre" />
					</div>
					<div class="col">
					   <label class="text-dark font-weight-bold" for="numero">Calle:</label>
					   <input class="form-control border border-dark" type="text" id="numero" name="numero" />
					</div>
				</div>
				
			</form>
		</div> <!-- fin de container -->
	  </div>
	  
	  
	  <div role="tabpanel" class="tab-pane fade" id="dpropietario">
		<div class="container"> <!-- todo el contenido ira dentro de esta etiqueta-->
			<form method="post" action="" id="fpropietario">

				<div class="row">
					<div class="col">
					   <label class="text-dark font-weight-bold" for="cedula">Cedula:</label>
					   <input class="form-control border border-dark" type="text" id="cedulap" name="cedulap" />
					   <span id="scedulap"></span>
					</div>
					<div class="col">
					   <label class="text-dark font-weight-bold" for="Nombre">Nombre:</label>
					   <input class="form-control border border-dark" type="text" id="nombrep" name="nombrep" />
					   <span id="snombrep"></span>
					</div>
				</div>

				<div class="row">
					<div class="col">
					   <label class="text-dark font-weight-bold" for="apellido">Apellido:</label>
					   <input class="form-control border border-dark" type="text" id="apellidop" name="apellidop" />
					   <span id="sapellidop"></span>
					</div>
					<div class="col">
					   <label class="text-dark font-weight-bold" for="telefono">Telefono:</label>
					   <input class="form-control border border-dark" type="text" id="telefonop" name="telefonop" />
					   <span id="stelefonop"></span>
					</div>
				</div>
				
				<div class="row">
					<div class="col">
					   <label class="text-dark font-weight-bold" for="cedula">Correo:</label>
					   <input class="form-control border border-dark" type="text" id="correop" name="correop" />
					   <span id="scorreop"></span>
					</div>
				</div>
		
			</form>
		</div> <!-- fin de container -->
	  </div>
	  
	  <div role="tabpanel" class="tab-pane fade" id="dinquilino">
		<div class="container"> <!-- todo el contenido ira dentro de esta etiqueta-->
			<form method="post" action="" id="fpropietario">

				<div class="row">
					<div class="col">
					   <label class="text-dark font-weight-bold" for="cedula">Cedula:</label>
					   <input class="form-control border border-dark" type="text" id="cedulap" name="cedulap" />
					   <span id="scedulap"></span>
					</div>
					<div class="col">
					   <label class="text-dark font-weight-bold" for="Nombre">Nombre:</label>
					   <input class="form-control border border-dark" type="text" id="nombrep" name="nombrep" />
					   <span id="snombrep"></span>
					</div>
				</div>

				<div class="row">
					<div class="col">
					   <label class="text-dark font-weight-bold" for="apellido">Apellido:</label>
					   <input class="form-control border border-dark" type="text" id="apellidop" name="apellidop" />
					   <span id="sapellidop"></span>
					</div>
					<div class="col">
					   <label class="text-dark font-weight-bold" for="telefono">Telefono:</label>
					   <input class="form-control border border-dark" type="text" id="telefonop" name="telefonop" />
					   <span id="stelefonop"></span>
					</div>
				</div>
				
				<div class="row">
					<div class="col">
					   <label class="text-dark font-weight-bold" for="cedula">Correo:</label>
					   <input class="form-control border border-dark" type="text" id="correop" name="correop" />
					   <span id="scorreop"></span>
					</div>
				</div>
		
			</form>
		</div> <!-- fin de container -->
	  </div>
	  
	  
	</div><!--fin del los contenedores-->
	    <div class="row">
			<div class="col">
				<hr/>
			</div>
		</div>
		<div class="row">
			<div class="col">
				   <button type="button" class="btn btn-danger font-weight-bold m-1 p-2" id="incluir" name="incluir">INCLUIR</button>
			</div>
			<div class="col">	
				   <button type="button" class="btn btn-danger font-weight-bold m-1 p-2" id="consultar" name="consultar">CONSULTAR</button>
			</div>
			<div class="col">	
				   <button type="button" class="btn btn-danger font-weight-bold m-1 p-2" id="modificar" name="modificar">MODIFICAR</button>
			</div>
			<div class="col">	
				   <button type="button" class="btn btn-danger font-weight-bold m-1 p-2" id="eliminar" name="eliminar">ELIMINAR</button>
			</div>
			<div class="col">	
				   <a href="." class="btn btn-danger font-weight-bold m-1 p-2">REGRESAR</a>
			</div>
	</div>
</div>



</body>
</html>