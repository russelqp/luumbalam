 <?php
function urls_amigables($url) {

// Tranformamos todo a minusculas

$url = strtolower($url);

//Rememplazamos caracteres especiales latinos

$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');

$repl = array('a', 'e', 'i', 'o', 'u', 'n');

$url = str_replace ($find, $repl, $url);

// Añaadimos los guiones

$find = array(' ', '&', '\r\n', '\n', '+'); 
$url = str_replace ($find, '-', $url);

// Eliminamos y Reemplazamos demás caracteres especiales

$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');

$repl = array('', '-', '');

$url = preg_replace ($find, $repl, $url);

return $url;

}
?>

<?php 
$servicio = $_GET['servicio'];
if ($servicio == "rodada")
{
	$h1="Rodada en bicicleta";
	$h2="Ejercitate en plena naturaleza";
	$slug ="rodada-en-bicicleta";
	$p = "Da el mejor paseo de tu vida, en medio de nuestro habitad natural, en el camino podrás observar distintas especias de la región.";
	$img1=" imagenes/rodada_1";
	$img2=" imagenes/rodada_2";
	$img3=" imagenes/rodada_3";
}
if ($servicio == "caminata")
{
	$h1="Caminata por la selva";
	$h2="Una caminata nada común";
	$slug ="rodada-en-bicicleta";
	$p = "Da el mejor paseo de tu vida, en medio de nuestro habitad natural, en el camino podrás observar distintas especias de la región.";
	$img1=" imagenes/rodada_1";
	$img2=" imagenes/rodada_2";
	$img3=" imagenes/rodada_3";
}
if ($servicio == "snorkeling")
{
	$h1="Snorkeling en Cenote";
	$h2="Sumergete en las profundidades de un cenote virgen";
	$slug ="rodada-en-bicicleta";
	$p = "Da el mejor paseo de tu vida, en medio de nuestro habitad natural, en el camino podrás observar distintas especias de la región.";
	$img1=" imagenes/rodada_1";
	$img2=" imagenes/rodada_2";
	$img3=" imagenes/rodada_3";
}
if ($servicio == "cavernas")
{
	$h1="Visita a las Cavernas";
	$slug ="Explora algo que muy pocos conocen";
	$h2="";
	$slug ="rodada-en-bicicleta";
	$p = "Da el mejor paseo de tu vida, en medio de nuestro habitad natural, en el camino podrás observar distintas especias de la región.";
	$img1=" imagenes/rodada_1";
	$img2=" imagenes/rodada_2";
	$img3=" imagenes/rodada_3";
}
if ($servicio == "camping")
{
	$h1="Camping bajo las estrellas";
	$h2="Una experiencia maravillosa";
	$slug ="rodada-en-bicicleta";
	$p = "Da el mejor paseo de tu vida, en medio de nuestro habitad natural, en el camino podrás observar distintas especias de la región.";
	$img1=" imagenes/rodada_1";
	$img2=" imagenes/rodada_2";
	$img3=" imagenes/rodada_3";
}
if ($servicio == "palapa")
{
	$h1="Palapa para Eventos";
	$h2="Trae a tus amigos a tu evento";
	$slug ="rodada-en-bicicleta";
	$p = "Da el mejor paseo de tu vida, en medio de nuestro habitad natural, en el camino podrás observar distintas especias de la región.";
	$img1=" imagenes/rodada_1";
	$img2=" imagenes/rodada_2";
	$img3=" imagenes/rodada_3";
}
?>
<?php include('inc/header.php'); ?>

<article>

<div id="mainContener2">
	<div id="welcome">
		<h1><?php echo $h1 ;?></h1>
		<h2><?php echo $h2 ;?></h2>
		<p><?php echo $p ;?></p>
		<p><img src="<?php echo $img1 ; ?>.jpg" /></p>
		<p><img src="<?php echo $img2 ; ?>.jpg" /></p>
		<p><img src="<?php echo $img3 ; ?>.jpg" /></p>				
	</div>
</div>

</article>

<?php include('inc/footer.php'); ?>


