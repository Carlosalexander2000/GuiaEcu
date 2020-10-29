<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
<head>
    <meta charset=”UTF-8″ />
    <title>HOME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <!--enlace css-->
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
    <div id="general">
        <div id="fichas">
             <h5 id="h34">Fichas Recientes</h5> 
             <div id="f1">
                <img src="img/ave.jpg" id="pficha">
                </br>
                <img src="img/oso.jpg" id="pficha">
                </br>
                <img src="img/ronda.jpg" id="pficha">
                </br>
                <img src="img/cevi.jpg" id="pficha">
            </div>    
            <div id="f2">
                <p id="nom">Piquero p. Azules</p>
                <i class="far fa-heart" id="ico2"></i>
                <p id="counting2"></p>
                </br>
                <p id="nom1">Oso de anteojos</p>
                <i class="far fa-heart" id="ico2"></i>
                <p id="counting3"></p>
                </br>
                <p id="nom2">La Ronda</p>
                <i class="far fa-heart" id="ico2"></i>
                <p id="counting4"></p>
                </br>
                <p id="nom3">Ceviche de Camaron</p>
                <i class="far fa-heart" id="ico2"></i>
                <p id="counting5"></p>
            </div>
             

        </div>

        <div id="posteo">
         <label for="exampleInputEmail1" id="subir">Subir imagen</label>
            <input type="text" class="form-control" id="fname" >
            <i class="fas fa-image" id="image"></i>
            <br>
        <label for="exampleInputEmail1" id="area">Descripcion de la imagen</label>
             <textarea name="comentarios" rows="40" cols="40" id="fdescripcion" class="form-control"></textarea>
        
         <select name="tipo" id="tipo">
            <option>Aves</option>
            <option>Plantas</option>
            <option>Animales</option>
            <option>Reser. Eco</option>
        </select>
        <input type="button" value="Guardar" id="save">
        </div>
       
        <div id="body">
            <div id="foto">
                <img src="img/ave.jpg" id="pique">
                <i type="button" class="far fa-heart" id="ico" onclick="counting()"></i>
                <p id="counting"></p>
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
    </div>
</div>

<script src="../js/contador.js"></script>
 </body>
</html>