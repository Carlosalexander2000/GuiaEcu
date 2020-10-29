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
     <!--enlace css-->
    <link href="css/fotos.css" rel="stylesheet" type="text/css" />
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
    <div id="perfil">

<div id="title">
        MY ALBUMS
    </div>
        
        <div id="aves" class="slider">
        <a href="fichas.php">
                <ul>
                    <li><img src="img/ave.jpg"  id="foto"></li>
                    <li><img src="img/lol.jpg"  id="foto"></li>
                    <li><img src="img2/tu.jpg"  id="foto"></li>
                    <li><img src="img2/co.jpg"  id="foto"></li>
                </ul>
        </a>
                <span>Aves</span><i class="fas fa-dove"></i>
        </div>
        


        <div id="lugares"  class="slider">
                <a href="../pantallas/fichas.html">
                <ul>
                    <li><img src="img2/ba.jpg"  id="foto"></li>
                    <li><img src="img2/vo.jpg"  id="foto"></li>
                    <li><img src="img2/ro.jpg"  id="foto"></li>
                    <li><img src="img2/lu.jpg"  id="foto"></li>
                </ul>
                </a>
                <span>Lugares</span><i class="fas fa-place-of-worship"></i>

        </div>

        <div id="comida"  class="slider">
                <ul>
                    <li><img src="img2/en.jpg"  id="foto"></li>
                    <li><img src="img2/bolon.jpg"  id="foto"></li>
                    <li><img src="img/cevi.jpg"  id="foto"></li>
                    <li><img src="img2/ti.jpg"  id="foto"></li>
                </ul>
                <span>Comida</span><i class="fas fa-utensils"></i>

        </div>

        <div id="reserva"  class="slider">
                <ul>
                    <li><img src="img2/v1.jpg"  id="foto"></li>
                    <li><img src="img2/v2.jpg"  id="foto"></li>
                    <li><img src="img2/v3.jpg"  id="foto"></li>
                    <li><img src="img2/v4.jpg"  id="foto"></li>
                </ul>
                <span>Reserva</span><i class="fas fa-tree"></i>                

        </div>

        <div id="mamiferos"  class="slider">
                <ul>
                    <li><img src="img2/m1.jpg"  id="foto"></li>
                    <li><img src="img2/m2.jpg"  id="foto"></li>
                    <li><img src="img2/m3.jpg"  id="foto"></li>
                    <li><img src="img/oso.jpg"  id="foto"></li>
                </ul>
                <span>Mamiferos</span><i class="fas fa-dog"></i>
        </div>

        <div id="rios"  class="slider">
                <ul>
                    <li><img src="img2/r1.jpg"  id="foto"></li>
                    <li><img src="img2/r2.jpg"  id="foto"></li>
                    <li><img src="img2/r3.jpg"  id="foto"></li>
                    <li><img src="img2/r4.jpg"  id="foto"></li>
                </ul>
                <span>Rios/lagos</span><i class="fas fa-water"></i>
        </div>
    </div>



</div>
 </body>
</html>