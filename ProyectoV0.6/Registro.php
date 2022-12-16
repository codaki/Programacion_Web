<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>HELP</title>
               
</head>
<body >    
    <header>        
        <h1 align="center" style="font-size:50px">HELP <img src="img/Logo.jpg" width="200" align="right"></h1>  
        <p align="center"><font size="5" >Página Ayuda Estudiantil</p>                        
        <br>                                
        <ul class="menu">
            <li> <a href="./Inicio.html">Inicio </a></li>
            <li> <a href="./Preguntas y Respuestas.html">Preguntas y Respuestas</a></li>
            <li> <a href="./Respuestas.html">Respuestas</a></li>
            <li> <a href="./Registro.html">Registro</a></li>
            <li> <a href="./QuienesSomos.html">¿Quiénes somos?</a></li>
        </ul>
</header>
  <div class="contenedor">
        <section><center>
        </center>
        <div align="center">
          <div class="formulario">
            <h1>Registro de Cuenta</h1><br>
            <img src="img/logoespe.png" width="350" height="100" alt="Logoespe">
        <?php
        $Nombre=$_POST['Nombre'];
        $Apellido=$_POST['Apellido'];
        $dni=$_POST['dni'];
        $Edad=$_POST['Edad'];
        $email=$_POST['email'];
        $pwd=$_POST['pwd'];
        echo "<p>Se ha realizado un registro exitoso</p>";
        echo "<table style='background-color:sky blue; text-align:center'>";
        echo "<tr>";
        echo "<td>Nombre:</td>";
        echo "<td>$Nombre</td>";
        echo "<tr>";
        echo "<td>Apellido:</td>";
        echo "<td>$Apellido</td>";
        echo "<tr>";
        echo "<td>Cédula:</td>";
        echo "<td>$dni</td>";
        echo "<tr>";
        echo "<td>Edad:</td>";
        echo "<td>$Edad</td>";
        echo "<tr>";
        echo "<td>email:</td>";
        echo "<td>$email</td>";
        echo "</table>";
        ?>
        </div>
        </div>
       
        
	</section>
        <aside>
            <br><br><br><br><br>
        <img src="img/estudiantes.jpg" width="300" height="270" alt="Logoespe" align="center">
    </div>
    
    <footer>
        <div class="pie">
            
            <br><img src="img/ubicacion.png"  width="70" height="70">
            <p>Universidad de las Fuerzas Armadas</p>
            <h3>ESPE</h3>
        </div>
        <div class="pie">      
            <img src="img/carta.png" border="0" width="70" height="70">
            <p>HELP.AyudaEstudiantil@gmail.com</p>
            <p>cdiza5@espe.edu.ec</p>
        </div>
        <div class="pie">
            <img src="img/llamada-telefonica.png" border="0" width="70" height="70">
            <p>099 504 7657 - 096 963 6094</p>
            <p>099 273 8381 - 099 547 4515</p>
            <p>093 993 0962 </p>
           
        </div>
            
   </footer>  
   <footer>
    <div class="pie">
    <p>© 2022 - Todos los derechos reservados</p>
    </div>
    </footer>
</body>
</html>
