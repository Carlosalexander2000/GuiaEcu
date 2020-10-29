<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang=”en”>
<head>
    <meta charset=”UTF-8″ />
    <title>HOME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <!--enlace css-->
    <link href="css/fichas.css" rel="stylesheet" type="text/css" />
    <link href="css/nodal.css" rel="stylesheet" type="text/css" />
    <link href="css/home.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <input type="checkbox" id="check">
<header>
    <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
         <h3>GUIA-<span>ECU</span></h3>
    </div>
    
    <div class="right_area">
    <a href="desconectar.php" class="logout_btn">Cerrar Sesion    <i class="fas fa-sign-out-alt"></i></a>	
    </div>
</header>
 <div class="sidebar">
    <center>
        <img src="img/lol.png" class="profile_image" alt="">
        <h4>Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </h4>
    </center>
    <a href="profile.php" title="Mi Perfil"><i class="fas fa-user" id="l1"></i><span>Profile</span></a>
    <a href="index2.php" title="Home"><i class="fas fa-home" id="l2"></i><span>Home</span></a>
    <a href="fotos.php" title="Mis Albunes"><i class="fas fa-camera" id="l3"></i><span>My Albums</span></a> 
    <a href="index.php" id="session" title="Cerrar Sesion"><i class="fas fa-sign-out-alt" id="l4"></i><span>Logout</span></a>
 </div>  

    <div class="content">
    <br><br><br>
      <a href="#openModal"><img src="img/ave.jpg"  id="foto"</a> 
<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2>Mi modal</h2>
		<p>Este es un ejemplo de modal, creado gracias al poder de CSS3.</p>
		<p>Puedes hacer un montón de cosas aquí, como alertas o incluso crear un formulario de registro aquí mismo.</p>
	</div>
</div>

<div id="info">
                <h3 id="h33">FICHA</h3>
                <p id="text">Nombre: Piquero patas azules
                <p id="text">Ubicacion: Islas Galapagos
                <p id="text">Nombre Cientifico: sula nebouxii
                <p id="text">Ubicacion: Isla Santa Cruz, Isabela
        
                <p id="text">Descripcion:
                
                <p id="text">Esta ave habita en las islas galapagos perteneciente 
                al Ecuador, su color llamativo de sus patas es la mayor atraccion de la vista de los turistas
                Ademas que es considerado una ave muy hermosa.
                </p>
            </div>
    </div> 


   
 </body>
</html>