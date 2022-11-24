<?php

include ("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    

    <title>Login de la Pagina | Actividades TDA</title>
</head>
<body>

    <section id="inicio">
        <div class="contenido">
            <header>
                <div class="contenido-header">
                    <a href="login.php"><h1>/PROGRAMA ACTIVIDADES/</h1></a>

                    <nav id="nav">

                        <ul id="links">
                        </ul>
                    </nav>
                    
                    <div id="icono-nav">
                        <i class="fa-solid fa-bars"></i>
                    </div>

                    <div class="redes">
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </header>
            <div class="presentacion">
                
                <div class="servicios">
                    <h3 class="titulo-seccion">INICIAR SESION</h3>
            
                    <div class="fila">
            
                        <div class="servicio">
            
                            <span class="icono"><i class="fa-solid fa-user"></i></span>

                            <form action="validar.php" method="POST"> 

                                <?php if(!empty($message)): ?>
                                    <h3> <?= $message ?></h3>
                                <?php endif; ?>

                                <h4>Usuario</h4>
                                <hr>
                
                                <input name="correo" type="text" placeholder="Introducir Correo" class="input-mitad">
                
                                <br>
                
                                <h4>Contraseña</h4>
                
                                <input name="clave" type="text" placeholder="Introducir Clave" class="input-mitad">

                                

                                

                                <br>
                                <br>
                
                                <input type="submit" value="Log In">                                
                            </form> 
                            <a href="signup.php">¿nueva cuenta?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
</body>
</html>