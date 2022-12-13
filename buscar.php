<?php
session_start();

$log = $sesion;

session_unset("busqueda");
session_unset("textoconsulta");
session_unset("consulta");
session_unset("zona");
session_unset("tipo");
session_unset("modalidad");

$sesion=$log;

session_register(sesion);

include("conexion.php");
$link=conectarse();
			  
?>

<head>

<title>InmoFutura</title>

<script language="Javascript">

function actualizaPagina ()
   {  
      i = document.forms.busqueda.selectzona.selectedIndex;
      zona = document.forms.busqueda.selectzona.options[i].value;
      window.location = 'index.php?zona=' + zona;
	}
	
</script>

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script><style type="text/css">



<!--
.style10 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #FFFFFF;
}
.style11 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FFFFFF;
}
.style12 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #396bff;
	}
.style13 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #CC9900;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #C4DAFB;
}
a:link {
	color: #FF9900;
}
a:visited {
	color: #FF9900;
}
.style14 {	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #FFFFFF;
}
-->
</style><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<body>
<div align="center">
  <table width="954" height="879" border="0" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0">
    <tr>
      <td width="79" height="875" valign="top" background="images/lateralizq.png" nowrap="nowrap"><p>&nbsp;</p>
      </td>
      <td width="800" valign="top"><table width="372" height="123" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0','width','800','height','50','hspace','0','vspace','0','align','middle','src','images/top','quality','high','bgcolor','#ffffff','allowscriptaccess','sameDomain','pluginspage','http://www.macromedia.com/go/POSTflashplayer','movie','top' ); //end AC code
      </script>
              <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="800" height="50" hspace="0" vspace="0" align="middle">
                <param name="allowScriptAccess" value="sameDomain" />
                <param name="movie" value="top.swf" />
                <param name="quality" value="high" />
                <param name="bgcolor" value="#ffffff" />
                <embed src="images/top.swf" width="800" height="50" hspace="0" vspace="0" align="middle" quality="high" bgcolor="#ffffff" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/POSTflashplayer" />        
              </object></td>
        </tr>
        <tr>
          <td><table id="Table_01" width="800" height="100" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="11"><img src="images/menucabecera_01.jpg" width="800" height="30" alt=""></td>
              </tr>
              <tr>
                <td rowspan="2"><img src="images/menucabecera_02.jpg" width="19" height="70" alt=""></td>
                <td><a href="index.php"><img src="images/menucabecera_03.jpg" alt="" width="80" height="45" border="0"></a></td>
                <td rowspan="2"><img src="images/menucabecera_04.jpg" width="41" height="70" alt=""></td>
                <td><img src="images/menucabecera_05.jpg" width="103" height="45" alt=""></td>
                <td rowspan="2"><img src="images/menucabecera_06.jpg" width="40" height="70" alt=""></td>
                <td><a href="anunciate.php"><img src="images/menucabecera_07.jpg" alt="" width="143" height="45" border="0"></a></td>
                <td rowspan="2"><img src="images/menucabecera_08.jpg" width="36" height="70" alt=""></td>
                <td><a href="descargas.php"><img src="images/menucabecera_09.jpg" alt="" width="155" height="45" border="0"></a></td>
                <td rowspan="2"><img src="images/menucabecera_10.jpg" width="36" height="70" alt=""></td>
                <td><a href="contacto.php"><img src="images/menucabecera_11.jpg" alt="" width="129" height="45" border="0"></a></td>
                <td rowspan="2"><img src="images/menucabecera_12.jpg" width="18" height="70" alt=""></td>
              </tr>
              <tr>
                <td><img src="images/menucabecera_13.jpg" width="80" height="25" alt=""></td>
                <td><img src="images/menucabecera_14.jpg" width="103" height="25" alt=""></td>
                <td><img src="images/menucabecera_15.jpg" width="143" height="25" alt=""></td>
                <td><img src="images/menucabecera_16.jpg" width="155" height="25" alt=""></td>
                <td><img src="images/menucabecera_17.jpg" width="129" height="25" alt=""></td>
              </tr>
          </table></td>
        </tr>
      </table>
        <p>
          <?php
		if($sesion==1){
		echo "<p align='right' class='style13'> Modo administrador / <A HREF='unlog.php'>Cerrar sesion</A></p>";
		}
		else
		echo "<p align='right' class='style13'><A HREF='login.php'>Login</A></p>";
        ?>
        </p>
        <p align="center">
		<body bgcolor="#ffffff">
<!--url's used in the movie-->
<!--text used in the movie-->
<!-- saved from url=(0013)about:internet -->
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="520" height="100" id="Busqueda" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="Busqueda.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><embed src="Busqueda.swf" quality="high" bgcolor="#ffffff" width="520" height="100" name="Busqueda" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
		
		</p>
        <?php 		
			$zona = $_POST['selectzona'];
			$tipo = $_POST['selecttipo'];
			$modalidad = $_POST['selectmodalidad'];
			$metrosmin = $_POST['metrosmin'];
			$metrosmax = $_POST['metrosmax'];
			$habitamin = $_POST['habitamin'];
			$habitamax = $_POST['habitamax'];
			$banosmin = $_POST['banosmin'];
			$banosmax = $_POST['banosmax'];
			$preciomax = $_POST['preciomax'];
			$preciomin = $_POST['preciomin'];

			
$num=2; //Numero de datos por pagina

$comienzo=$_POST['comienzo']; //Obtiene el nº de pagina anterior

if(!isset($comienzo))
$comienzo=0; //Si la pagina carga y comienzo no tiene ningun valor, comienzo valdrá 0
			
			$zona = 0;
			if(!isset($tipo))
			$tipo = 0;
			if(!isset($modalidad))
			$modalidad = 0;
			if(!isset($metrosmin))
			$metrosmin = 0;
			if(!isset($metrosmax))
			$metrosmax = 9999999999;
			if(!isset($habitamin))
			$habitamin = 0;
			if(!isset($habitamax))
			$habitamax = 9999999999;
			if(!isset($banosmax))
			$banosmax = 9999999999;
			if(!isset($banosmin))
			$banosmin = 0;
			if(!isset($preciomin))
			$preciomin = 0;
			if(!isset($preciomax))
			$preciomax = 9999999999;
		
		
		    $result = mysql_query("SELECT * FROM Inmueble WHERE id_modalidad=$modalidad AND id_zona=$zona AND id_tipo=$tipo AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax LIMIT $comienzo , $num",$link);
			$consulta = mysql_query("SELECT * FROM Inmueble WHERE id_modalidad=$modalidad AND id_zona=$zona AND id_tipo=$tipo AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax",$link);
			$textoconsulta ="SELECT * FROM Inmueble WHERE id_modalidad=$modalidad AND id_zona=$zona AND id_tipo=$tipo AND n_metros>=$metrosmin AND n_metros<=$metrosmax 		AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax AND num_banos>=$banosmin AND num_banos<=$banosmax AND precio>=$preciomin AND precio<=$preciomax";
	
		
			if($zona==0){ //Sin elegir zona
			$result = mysql_query("SELECT * FROM Inmueble WHERE id_tipo=$tipo AND id_modalidad=$modalidad AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax LIMIT $comienzo , $num",$link);
			$consulta = mysql_query("SELECT * FROM Inmueble WHERE id_tipo=$tipo AND id_modalidad=$modalidad AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax",$link);
			$textoconsulta = "SELECT * FROM Inmueble WHERE id_tipo=$tipo AND id_modalidad=$modalidad AND n_metros>=$metrosmin AND n_metros<=$metrosmax AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax AND num_banos>=$banosmin AND num_banos<=$banosmax AND precio>=$preciomin AND precio<=$preciomax";
			}
			
			if($modalidad==0){ //Sin elegir modalidad
			$result = mysql_query("SELECT * FROM Inmueble WHERE id_tipo=$tipo AND id_zona=$zona AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax LIMIT $comienzo , $num",$link);
			$consulta = mysql_query("SELECT * FROM Inmueble WHERE id_tipo=$tipo AND id_zona=$zona AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax",$link);		
			$textoconsulta = "SELECT * FROM Inmueble WHERE id_tipo=$tipo AND id_zona=$zona AND n_metros>=$metrosmin AND n_metros<=$metrosmax AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax AND num_banos>=$banosmin AND num_banos<=$banosmax AND precio>=$preciomin AND precio<=$preciomax";	
			}
			
			if($tipo==0){ //Sin elegir tipo
			$result = mysql_query("SELECT * FROM Inmueble WHERE id_modalidad=$modalidad AND id_zona=$zona AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax LIMIT $comienzo , $num",$link);
			$consulta = mysql_query("SELECT * FROM Inmueble WHERE id_modalidad=$modalidad AND id_zona=$zona AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax",$link);
			$textoconsulta = "SELECT * FROM Inmueble WHERE id_modalidad=$modalidad AND id_zona=$zona AND n_metros>=$metrosmin AND n_metros<=$metrosmax AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax AND num_banos>=$banosmin AND num_banos<=$banosmax AND precio>=$preciomin AND precio<=$preciomax";
			}
			
			if($zona==0 AND $tipo==0){ //Sin elegir zona ni tipo
			$result = mysql_query("SELECT * FROM Inmueble WHERE id_modalidad=$modalidad AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax LIMIT $comienzo , $num",$link);
			$consulta = mysql_query("SELECT * FROM Inmueble WHERE id_modalidad=$modalidad AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax",$link);
			$textoconsulta = "SELECT * FROM Inmueble WHERE id_modalidad=$modalidad AND n_metros>=$metrosmin AND n_metros<=$metrosmax AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax AND num_banos>=$banosmin AND num_banos<=$banosmax AND precio>=$preciomin AND precio<=$preciomax";
			}
			
			if($zona==0 AND $modalidad==0){ //Sin elegir ni zona ni modalidad
			$result = mysql_query("SELECT * FROM Inmueble WHERE id_tipo=$tipo AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax LIMIT $comienzo , $num",$link);
			$consulta = mysql_query("SELECT * FROM Inmueble WHERE id_tipo=$tipo AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax",$link);
			$textoconsulta = "SELECT * FROM Inmueble WHERE id_tipo=$tipo AND n_metros>=$metrosmin AND n_metros<=$metrosmax AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax AND num_banos>=$banosmin AND num_banos<=$banosmax AND precio>=$preciomin AND precio<=$preciomax";
			}
			
			if($modalidad==0 AND $tipo==0){ //Sin elegir ni tipo ni modalidad
			$result = mysql_query("SELECT * FROM Inmueble WHERE id_zona=$zona AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax LIMIT $comienzo , $num",$link);
		    $consulta = mysql_query("SELECT * FROM Inmueble WHERE id_zona=$zona AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax",$link);
			$textoconsulta = "SELECT * FROM Inmueble WHERE id_zona=$zona AND n_metros>=$metrosmin AND n_metros<=$metrosmax AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax AND num_banos>=$banosmin AND num_banos<=$banosmax AND precio>=$preciomin AND precio<=$preciomax";
			}//ESTE
			
			if($zona==0 AND $tipo==0 AND $modalidad==0){
			$result = mysql_query("SELECT * FROM Inmueble WHERE 
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax LIMIT $comienzo , $num",$link); ////////////////////////////////////////////////////////////////////////
			$consulta = mysql_query("SELECT * FROM Inmueble WHERE 
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax",$link);
			$textoconsulta = "SELECT * FROM Inmueble WHERE n_metros>=$metrosmin AND n_metros<=$metrosmax AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax AND num_banos>=$banosmin AND num_banos<=$banosmax AND precio>=$preciomin AND precio<=$preciomax";
			}
		?>
		
		
		<form name="busqueda" action="temp.php" method="POST">
		  <p align="center">&nbsp;</p>
		  <table border='0' cellpadding='0' cellspacing='0' align="center">
            <tr>
              <td width='16' 	align='left' valign='bottom'><img src='images/backindex_01.jpg' width='16' height='12' alt=''></td>
              <td width='138' td height='12' background='images/backindex_02.jpg'></td>
              <td width='13' align='left' valign='bottom'><img src='images/backindex_03.jpg' width='13' height='12' alt=''></td>
            </tr>
            <tr>
              <td height='19' background='images/backindex_04.jpg'></td>
              <td align='left' valign='top' bgcolor='396bff'><p class="style10" align="center"><strong>Búsqueda avanzada</strong></p>
                <p class="style10">&nbsp;&nbsp;&nbsp;&nbsp;Zona: <br>
  &nbsp;&nbsp;&nbsp;
  <select name="selectzona">
    <option value="0" selected>Todas</option>
    <?php

			  $result = mysql_query("SELECT nombre, id_zona FROM zona", $link); //Consulta de las zonas
		
              
				while($row = mysql_fetch_array($result)) //Mientras haya datos...
      		   { 
		 		echo "<option value='".$row['id_zona']."'>".$row['nombre']."</option>";
			  	}
			  ?>
  </select>
                </p>
                <p class="style10">&nbsp;&nbsp;&nbsp;&nbsp;Tipo: <br>
  &nbsp;&nbsp;&nbsp;
  <select name="selecttipo">
    <option value="0" selected>Todos</option>
    <?php
			  $result = mysql_query("SELECT * FROM tipo", $link); //Consulta de las modalidades
			  
				while($row = mysql_fetch_array($result)) //Mientras haya datos...
      		   { 
		 		echo "<option value='".$row['id_tipo']."'>".$row['descripcion']."</option>";
			  	}
			  ?>
  </select>
                </p>
                <p class="style10">&nbsp;&nbsp;&nbsp;&nbsp;Modalidad: <br>
  &nbsp;&nbsp;&nbsp;
  <select name="selectmodalidad">
    <option value="0" selected>Todas</option>
    <?php
			  $result = mysql_query("SELECT * FROM modalidad", $link); //Consulta de las modalidades
			  
				while($row = mysql_fetch_array($result)) //Mientras haya datos...
      		   { 
		 		echo "<option value='".$row['id_modalidad']."'>".$row['descripcion']."</option>";
			  	}
				//mysql_free_result($result); 
      			//mysql_close($link);                 CERRAR LA CONEXION CON LA BASE DE DATOS DE LA INMOBILIARIA
			  ?>
  </select>
                </p>
                <p class="style10">&nbsp;&nbsp;&nbsp;&nbsp;Metros:</p>
                <p class="style10">&nbsp;&nbsp;&nbsp;&nbsp;M&iacute;n:
                  <label>
                    <select name="metrosmin">
                      <option value="0" selected>0m&sup2;</option>
                      <option value="20">20m&sup2;</option>
                      <option value="40">40m&sup2;</option>
                      <option value="60">60m&sup2;</option>
                      <option value="80">80m&sup2;</option>
                      <option value="100">100m&sup2;</option>
                    </select>
                  </label>
                  M&aacute;x:
  <select name="metrosmax">
    <option value="999999999">Sin l&iacute;mite</option>
    <option value="20">20m&sup2;</option>
    <option value="40">40m&sup2;</option>
    <option value="60">60m&sup2;</option>
    <option value="80">80m&sup2;</option>
    <option value="100">100m&sup2;</option>
    <option value="150">150m&sup2;</option>
    <option value="200">200m&sup2;</option>
    <option value="250">250m&sup2;</option>
    <option value="300">300m&sup2;</option>
    <option value="350">350m&sup2;</option>
    <option value="400">400m&sup2;</option>
  </select>
                </p>
                <p class="style10">&nbsp;&nbsp;&nbsp;&nbsp;Habitaciones:</p>
                <p class="style10">&nbsp;&nbsp;&nbsp;&nbsp;M&iacute;n:
                  <label>
                    <select name="habitamin">
                      <option value="0">Ninguna</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </label>
                  Max:
  <label>
  <select name="habitamax">
    <option value="999999">Sin l&iacute;mite</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
  </select>
  </label>
                </p>
                <p class="style10">&nbsp;&nbsp;&nbsp;&nbsp;Ba&ntilde;os:</p>
                <p class="style10">&nbsp;&nbsp;&nbsp;&nbsp;M&iacute;n:
                  <label>
                    <select name="banosmin">
                      <option value="0">Ninguno</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </label>
                  Max:
  <label>
  <select name="banosmax">
    <option value="999999">Sin l&iacute;mite</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
  </select>
  </label>
                <p class="style10">&nbsp;&nbsp;&nbsp;&nbsp;Precio:
                <p class="style10">&nbsp;&nbsp;&nbsp;&nbsp;M&iacute;n:
                  <label>
                    <select name="preciomin">
                      <option value="0" selected>Ninguno</option>
                      <option value="100">100&euro;</option>
                      <option value="300">300&euro;</option>
                      <option value="500">500&euro;</option>
                      <option value="1000">1.000&euro;</option>
                      <option value="2000">2.000&euro;</option>
                      <option value="5000">5.000&euro;</option>
                      <option value="10000">10.000&euro;</option>
                      <option value="30000">30.000&euro;</option>
                      <option value="60000">60.000&euro;</option>
                      <option value="100000">100.000&euro;</option>
                      <option value="150000">150.000&euro;</option>
                      <option value="200000">200.000&euro;</option>
                      <option value="300000">300.000&euro;</option>
                      <option value="500000">500.000&euro;</option>
                    </select>
                  </label>
                  Max:
  <label></label>
  <select name="preciomax">
    <option value="9999999999999" selected>Sin l&iacute;mite</option>
    <option value="100">100&euro;</option>
    <option value="300">300&euro;</option>
    <option value="500">500&euro;</option>
    <option value="1000">1.000&euro;</option>
    <option value="2000">2.000&euro;</option>
    <option value="5000">5.000&euro;</option>
    <option value="10000">10.000&euro;</option>
    <option value="30000">30.000&euro;</option>
    <option value="60000">60.000&euro;</option>
    <option value="100000">100.000&euro;</option>
    <option value="150000">150.000&euro;</option>
    <option value="200000">200.000&euro;</option>
    <option value="300000">300.000&euro;</option>
    <option value="500000">500.000&euro;</option>
  </select>
                <p align="center" class="style10">
                  <input type="submit" name="buscar" value="Buscar">
                </p>
                <p align="center" class="style10">
                  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="300" height="100" id="buscar" align="middle">
                    <param name="allowScriptAccess" value="sameDomain" />
                    <param name="movie" value="buscar.swf" />
                    <param name="quality" value="high" />
                    <param name="bgcolor" value="#ffffff" />
                    
                    <embed src="buscar.swf" width="300" height="100" align="middle" quality="high" bgcolor="#ffffff" name="buscar" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />                  
</object>
                </p>
                <p align="center" class='style14'></td>
              <td height='19' background='images/backindex_06.jpg'></td>
            </tr>
            <tr>
              <td height='13'><img src='images/backindex_07.jpg' width='16' height='13' alt=''></td>
              <td height='13' background='images/backindex_08.jpg'></td>
              <td><img src='images/backindex_09.jpg' width='13' height='13' alt=''></td>
            </tr>
          </table>
		</form>        <p>&nbsp;</p></td>
      <td width="75" height="875" valign="top" background="images/lateralder.png" nowrap="nowrap">&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
