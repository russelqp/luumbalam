<?php include('head.html'); ?>
<?php include('aside.html'); ?>
<div id="article1">
<?php
	$fecha = $_POST["theDate"];
	$hora = $_POST["hora"];
	$adultos = $_POST["adultos"];
	$ninos = $_POST["ninos"];
	
	$precioa = 300.00;
	$precion = 200.00;
	$descuento = 100.00;
	$totala = $adultos * $precioa;
	$totaln = $ninos * $precion; 
	// Hay campos en blanco

	?>
    
<div id="mainContener">

<div id="welcome">

<h2>Detalle de compra</h2><br>
<p>Fecha de visita: <input type="text" class="fecha" value="<?php echo $fecha; ?>"> Horario de tour: <?php echo $hora; ?></p>
<br>
<table width="600" border="0">
  <tr>
    <td>Descripci&oacute;n</td>
    <td>Precio</td>
    <td>Descuento</td>
    <td>Total</td>
  </tr>
  <tr>
    <td>Adultos(<?php echo $adultos;?>)</td>
    <td>$<?php echo $precioa;?></td>
    <td>&nbsp;</td>
    <td>$<?php echo $totala;?></td>
  </tr>
  <tr>
    <td>Niños(<?php echo $ninos;?>) </td>
    <td>$<?php echo $precion;?></td>
    <td>&nbsp;</td>
    <td>$<?php echo $totaln;?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<hr class="linea" />
<table width="600" border="0">
<tr>
<td width="77%">Total:</td>
<td width="23%">$<?php echo $totala + $totaln; ?></td>
</tr>
</table>
<br>
<h3>Forma de pago</h3>
<form name="form1" method="post" action="">
  <p>
    <label>
      <input type="radio" name="Tarjeta de " value="radio" id="t_credito">
      Tarjeta de cr&eacute;dito</label>
    <br>
    <label>
      <input type="radio" name="t_credito" value="radio" id="paypal">
      Paypal</label>
    <br>
    <label>
      <input type="radio" name="t_credito" value="radio" id="deposito">
     Deposito Bancario</label>
    <br>
  </p>
</form>
</div>
</div>
</div> <!-- END ARTICLE-->
<?php include('footer.html'); ?>
