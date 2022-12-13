<?php
session_start();

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
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #C4DAFB;
}
-->
</style><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><body>
<div align="center">
  <table width="946" height="879" border="0" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0">
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
                <td><img src="images/menucabecera_09.jpg" width="155" height="45" alt=""></td>
                <td rowspan="2"><img src="images/menucabecera_10.jpg" width="36" height="70" alt=""></td>
                <td><img src="images/menucabecera_11.jpg" width="129" height="45" alt=""></td>
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
        <p>&nbsp;</p>
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
			
			if(!isset($zona))
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
		
		
		    $result = mysql_query("SELECT * FROM inmueble WHERE id_modalidad=$modalidad AND id_zona=$zona AND id_tipo=$tipo AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax LIMIT $comienzo , $num",$link);
			$consulta = mysql_query("SELECT * FROM inmueble WHERE id_modalidad=$modalidad AND id_zona=$zona AND id_tipo=$tipo AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax",$link);
			$textoconsulta ="SELECT * FROM inmueble WHERE id_modalidad=$modalidad AND id_zona=$zona AND id_tipo=$tipo AND n_metros>=$metrosmin AND n_metros<=$metrosmax AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax AND num_banos>=$banosmin AND num_banos<=$banosmax AND precio>=$preciomin AND precio<=$preciomax";
	
		
			if($zona==0){ //Sin elegir zona
			$result = mysql_query("SELECT * FROM inmueble WHERE id_tipo=$tipo AND id_modalidad=$modalidad AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax LIMIT $comienzo , $num",$link);
			$consulta = mysql_query("SELECT * FROM inmueble WHERE id_tipo=$tipo AND id_modalidad=$modalidad AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax",$link);
			$textoconsulta = "SELECT * FROM inmueble WHERE id_tipo=$tipo AND id_modalidad=$modalidad AND n_metros>=$metrosmin AND n_metros<=$metrosmax AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax AND num_banos>=$banosmin AND num_banos<=$banosmax AND precio>=$preciomin AND precio<=$preciomax";
			}
			
			if($modalidad==0){ //Sin elegir modalidad
			$result = mysql_query("SELECT * FROM inmueble WHERE id_tipo=$tipo AND id_zona=$zona AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax LIMIT $comienzo , $num",$link);
			$consulta = mysql_query("SELECT * FROM inmueble WHERE id_tipo=$tipo AND id_zona=$zona AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax",$link);		
			$textoconsulta = "SELECT * FROM inmueble WHERE id_tipo=$tipo AND id_zona=$zona AND n_metros>=$metrosmin AND n_metros<=$metrosmax AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax AND num_banos>=$banosmin AND num_banos<=$banosmax AND precio>=$preciomin AND precio<=$preciomax";	
			}
			
			if($tipo==0){ //Sin elegir tipo
			$result = mysql_query("SELECT * FROM inmueble WHERE id_modalidad=$modalidad AND id_zona=$zona AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax LIMIT $comienzo , $num",$link);
			$consulta = mysql_query("SELECT * FROM inmueble WHERE id_modalidad=$modalidad AND id_zona=$zona AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax",$link);
			$textoconsulta = "SELECT * FROM inmueble WHERE id_modalidad=$modalidad AND id_zona=$zona AND n_metros>=$metrosmin AND n_metros<=$metrosmax AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax AND num_banos>=$banosmin AND num_banos<=$banosmax AND precio>=$preciomin AND precio<=$preciomax";
			}
			
			if($zona==0 AND $tipo==0){ //Sin elegir zona ni tipo
			$result = mysql_query("SELECT * FROM inmueble WHERE id_modalidad=$modalidad AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax LIMIT $comienzo , $num",$link);
			$consulta = mysql_query("SELECT * FROM inmueble WHERE id_modalidad=$modalidad AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax",$link);
			$textoconsulta = "SELECT * FROM inmueble WHERE id_modalidad=$modalidad AND n_metros>=$metrosmin AND n_metros<=$metrosmax AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax AND num_banos>=$banosmin AND num_banos<=$banosmax AND precio>=$preciomin AND precio<=$preciomax";
			}
			
			if($zona==0 AND $modalidad==0){ //Sin elegir ni zona ni modalidad
			$result = mysql_query("SELECT * FROM inmueble WHERE id_tipo=$tipo AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax LIMIT $comienzo , $num",$link);
			$consulta = mysql_query("SELECT * FROM inmueble WHERE id_tipo=$tipo AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax",$link);
			$textoconsulta = "SELECT * FROM inmueble WHERE id_tipo=$tipo AND n_metros>=$metrosmin AND n_metros<=$metrosmax AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax AND num_banos>=$banosmin AND num_banos<=$banosmax AND precio>=$preciomin AND precio<=$preciomax";
			}
			
			if($modalidad==0 AND $tipo==0){ //Sin elegir ni tipo ni modalidad
			$result = mysql_query("SELECT * FROM inmueble WHERE id_zona=$zona AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax LIMIT $comienzo , $num",$link);
		    $consulta = mysql_query("SELECT * FROM inmueble WHERE id_zona=$zona AND
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax",$link);
			$textoconsulta = "SELECT * FROM inmueble WHERE id_zona=$zona AND n_metros>=$metrosmin AND n_metros<=$metrosmax AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			 AND num_banos>=$banosmin AND num_banos<=$banosmax AND precio>=$preciomin AND precio<=$preciomax";
			}
			
			if($zona==0 AND $tipo==0 AND $modalidad==0){
			$result = mysql_query("SELECT * FROM inmueble WHERE 
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax LIMIT $comienzo , $num",$link); ////////////////////////////////////////////////////////////////////////
			$consulta = mysql_query("SELECT * FROM inmueble WHERE 
			n_metros>=$metrosmin AND n_metros<=$metrosmax 
			AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax
			AND num_banos>=$banosmin AND num_banos<=$banosmax
			AND precio>=$preciomin AND precio<=$preciomax",$link);
			$textoconsulta = "SELECT * FROM inmueble WHERE n_metros>=$metrosmin AND n_metros<=$metrosmax AND num_habitaciones>=$habitamin AND num_habitaciones<=$habitamax AND num_banos>=$banosmin AND num_banos<=$banosmax AND precio>=$preciomin AND precio<=$preciomax";
			}
		
		$busqueda = $textoconsulta;
		session_register("busqueda");
		
		//echo $busqueda;

		echo "<meta http-equiv='refresh' content='0;URL=buscar2.php'>";
		
		?>
		  <p>&nbsp;</p></td>
      <td width="67" height="875" valign="top" background="images/lateralder.png" nowrap="nowrap">&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
