<?php 
	$url_r="http://localhost/luumbalam/";
	$url_a ="";
	$my_url = $url_r;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Lu'um Balam Ecopark</title>
<link href="<?php echo $my_url;?>css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo $my_url;?>css/social-icons.css" type="text/css" media="screen" />
<link href="img/favicon.ico" rel="shortcut icon">
<!-- Coloca esta función de publicación donde corresponda. -->
<script src="<?php echo $my_url; ?>js/prefixfree.min.js"></script>
<link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>

	<SCRIPT type="text/javascript" src="dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>


</head>

<body>

<section id="contener">
		<div id="social-holder">
					<ul class="social">
                    <li><g:plusone></g:plusone></a></li>
						<li><a href="http://www.facebook.com/profile.php?id=100000729942888" class="poshytip facebook" title="Fanpage Lu'um Balam"></a></li>
						<li><a href="http://www.twitter.com" class="poshytip twitter" title="Sigue nuestros tweets"></a></li>
						<li><a href="http://www.vimeo.com" class="poshytip vimeo" title="Videos Lu'um Balam en Vimeo"></a></li>
						<li><a href="http://www.youtube.com/watch?v=D7F7-Fnt4R8" class="poshytip youtube" title="Videos Lu'um Balam en Youtube"></a></li>
                        <li class="li-izq">Atención a clientes:<img src="img/mx.png" width="19" height="12" alt="bandera-mexico" /> 01800-205-5896 | <img src="img/us.png" width="19" height="12" alt="bandera-us" />1-888-712-6489</li>
                       
					</ul>
                     <span><a href="aviso.php" title="Aviso acerca de este sitio">¡Aviso Importante!</a></span>
		</div>
    <header>
        <div class="logos">
        <img src="imagenes/logo.png" width="124" height="120" /> <img src="imagenes/luumbalam.png" width="512" height="120" />
        </div>
        <nav class="nav-top">
        <a href="index.php" class="griz">Inicio</a>
        <a href="acercade.php" class="griz">Quienes somos</a>
        <a href="servicios.php" class="griz">Servicios</a>
        <a href="galeria.php" class="griz">Galeria</a>
        <a href="contacto.php" class="griz">Contacto</a>
        </nav>
        <div id="buscador">
        <input name="buscador-input" type="text" class="buscador-input" placeholder="Escribe el texto a buscar"/>
        <input name="buscar-btn" type="button" value="buscar" class="clean-gray3">
        </div>
        <div class="fixclear"></div>
        <div id="multimedia">
        <img src="imagenes/jaguar.jpg" width="690" height="275" /> 
        </div>
        <form action="compra.php" target="v" onsubmit="windowd.open(this.href,this.target,'width=200,height=100')" method="post" enctype="multipart/form-data" class="form1" >
        <p>Realiza tu reservación aquí</p>
        <div class="form-fecha">
        <input type="text" value="2012/03/20" readonly name="theDate" placeholder="Fecha de tu visita" class="-fecha"><input type="button" onclick="displayCalendar(document.forms[0].theDate,'yyyy/mm/dd',this)" class="btn-calendar">
        </div>
        <div class="form-hora">
        <label>Hora</label><select name="hora" size="1" class="-hora">
          <option>8:00 AM</option>
          <option>14:00 PM</option>
          <option>20:00 PM</option>
         </select>
        </div>
        <div class="form-visitantes">
        <label>Adultos<select name="adultos" size="1" class="-adultos">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
        </select></label><label>Niños<select name="ninos" size="1" class="-ninos">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
        </select></label>
        </div>
        <input name="reservar" type="submit" value="Reservar" class="clean-gray">
        <br />
        <hr class="linea" />
        <a href="login.php" class="clean-gray2">Tu cuenta</a>
        <a href="contacto.php" class="clean-gray2">Contactanos</a><br />
        <br />
        <img src="img/compra_segura.gif" width="80" height="50" alt="compra-segura" />
        <img src="img/paypal4.jpg" width="80" height="50" alt="paypal" />
        </form>
        <div class="fixclear"></div>

    </header>
