<?php
$nombreErr = $cedulaErr = $telefonoErr = $emailErr = "";
$nombre = $cedula = $telefono = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nombre"])) {
    $nombreErr = "Nombre es requerido";
  } else {
    $nombre = test_input($_POST["nombre"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
      $nombreErr = "Use solo letras y espacios";
    }
  }
  
  if (empty($_POST["cedula"])) {
    $cedulaErr = "Requiere número de cédula";
  } else {
    $cedula = test_input($_POST["cedula"]);
    if (!preg_match("/^[0-9\-]*$/",$cedula)) {
      $cedulaErr = "Use solo números y guiones";
    }
  }

  if (empty($_POST["telefono"])) {
    $telefonoErr = "Requiere un número de teléfono";
  } else {
    $telefono = test_input($_POST["telefono"]);
    if (!preg_match("/^[0-9\-]*$/",$telefono)) {
      $telefonoErr = "Use solo números y guiones";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Requiere un Email Válido";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Formato no válido";
    }
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div id="header">
    <img src="/img/logo-bottom.png" alt="imperial logo">
</div>
<div id="body">
    <div id="bodyTop">
        <p>Aprovechá el</p>
        <p class="bigRed"><strong>I.B.A.</strong><span>(Imperial Barata Aquí)</span></p>
        <img src="/img/man.jpg" alt="mae">
        <div class="endImg"></div>
    </div>
    <div id="bodyMid">
        <p>Salí a buscar las promos con</p>
        <p><strong>I.B.A.</strong>(Imperial Barata Aquí)</p>
        <ul>
            <li class="red">
                <img src="/img/birra-01.jpg" alt="birra">
                <div class="titulo">Baldazo<br>6 birras</div>
                <div class="hablador">
                    <p class="antes">Antes: <span class="cur"><i>₡</i><span>6600</span></span></p>
                    <p>Ahora:</p>
                    <div class="cur"><i>₡</i>6600</div>
                    <p class="tiny">precio sugerido</p>
                </div>
            </li>
            <li class="red">
                <img src="/img/birra-02.jpg" alt="birra">
                <div class="titulo">Baldazo<br>5 birras</div>
                <div class="hablador">
                    <p class="antes">Antes: <span class="cur"><i>₡</i><span>5500</span></span></p>
                    <p>Ahora:</p>
                    <div class="cur"><i>₡</i>5500</div>
                    <p class="tiny">precio sugerido</p>
                </div>
            </li>
            <li class="red">
                <img src="/img/birra-03.jpg" alt="birra">
                <div class="titulo">Six Pack</div>
                <div class="hablador">
                    <p class="antes">Antes: <span class="cur"><i>₡</i><span>5100</span></span></p>
                    <p>Ahora:</p>
                    <div class="cur"><i>₡</i>4500</div>
                    <p class="tiny">precio sugerido</p>
                </div>
            </li>
            <li class="yellow">
                <img src="/img/birra-04.jpg" alt="birra">
                <div class="titulo">Botella<br>350 ml</div>
                <div class="hablador">
                    <p class="antes">Antes: <span class="cur"><i>₡</i><span>1200</span></span></p>
                    <p>Ahora:</p>
                    <div class="cur"><i>₡</i>1000</div>
                    <p class="tiny">precio sugerido</p>
                </div>
            </li>
            <li class="yellow">
                <img src="/img/birra-05.jpg" alt="birra">
                <div class="titulo">Gordita<br>750 ml</div>
                <div class="hablador">
                    <p class="antes">Antes: <span class="cur"><i>₡</i><span>1500</span></span></p>
                    <p>Ahora:</p>
                    <div class="cur"><i>₡</i>1200</div>
                    <p class="tiny">precio sugerido</p>
                </div>
            </li>
            <li class="yellow">
                <img src="/img/birra-06.jpg" alt="birra">
                <div class="titulo">lata<br>473 ml</div>
                <div class="hablador">
                    <p>A solo:</p>
                    <div class="cur"><i>₡</i>1000</div>
                    <p class="tiny">precio sugerido</p>
                </div>
            </li>
            <li class="red">
                <img src="/img/birra-07.jpg" alt="birra">
                <div class="titulo">lata<br>710 ml</div>
                <div class="hablador">
                    <p>A solo:</p>
                    <div class="cur"><i>₡</i>1300</div>
                    <p class="tiny">precio sugerido</p>
                </div>
            </li>
            <li class="red">
                <img src="/img/birra-08.jpg" alt="birra">
                <div class="titulo">litro</div>
                <div class="hablador">
                    <p class="antes">Antes: <span class="cur"><i>₡</i><span>1450</span></span></p>
                    <p>Ahora:</p>
                    <div class="cur"><i>₡</i>1300</div>
                    <p class="tiny">precio sugerido</p>
                </div>
            </li>
        </ul>
    </div>
    <div id="bodyBot">
        <div class="endImg"></div>
        <a href="#" class="btn">
            Consultá Aquí<span>Los bares con promo</span>
            <img src="/img/hand.png" alt="pointer-Big">
        </a>
    </div>
</div>
<div id="formSec">
    <div class="texto">
        <div class="container">
            <p><span>Durante las próximas semanas</span> tendremos un</p>
            <p>Conversatorio<br><span>con <span>Expertos</span></span></p>
            <p>Para explicarle a costa rica más sobre el I.V.A.</p>
            <ul>
                <li><img src="/img/event-icons-place.png" alt="place">Bar República</li>
                <li><img src="/img/event-icons-time.png" alt="time">15 de julio</li>
            </ul>
        </div>
        <a href="#" class="btn">
            Descargar<span>recordatorio</span>
            <img src="/img/hand.png" alt="pointer-Big">
        </a>
    </div>
    <div class="form">
        <div id="brand">
            <img src="/img/aguila.png" alt="birra logo">
            <div>
                <p class="ttw">¿Querés conocer más sobre el I.B.A. y otras promos</p>
                <p class="tty">Dejanos tus datos</p>
            </div>
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label>Nombre Completo:</label>
            <input type="text" name="nombre" value="<?php echo $nombre;?>">
            <span><?php echo $nombreErr;?></span>
            <label>Cédula:</label>
            <input type="text" name="cedula" value="<?php echo $cedula;?>">
            <span><?php echo $cedulaErr;?></span>
            <label>Teléfono:</label>
            <input type="text" name="telefono" value="<?php echo $telefono;?>">
            <span><?php echo $telefonoErr;?></span>
            <label>Correo:</label>
            <input type="text" name="email" value="<?php echo $email;?>">
            <span><?php echo $emailErr;?></span>
            <input type="submit" name="submit" value="Submit">
            <i>Todos los campos son requeridos</i>
        </form>
        <div class="render">
        <?php

            echo "<h2>La información enviada es:</h2>";
            echo $nombre;
            echo "<br>";
            echo $cedula;
            echo "<br>";
            echo $telefono;
            echo "<br>";
            echo $email;            
        ?>
        </div>
    </div>
</div>  
<div id="footer">
    <div class="yellow"></div>
    <div class="endImg"></div>
    <div class="black"><img src="/img/logo-bottom.png" alt="logo"></div>
</div>  
</body>
</html>