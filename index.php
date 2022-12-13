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
-->
</style><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><body>
<div align="center">
  <table width="944" height="229" border="0" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0">
    <tr>
      <td width="65" height="875" valign="top" background="images/lateralizq.png" nowrap="nowrap"><p>&nbsp;</p>
      <p>&nbsp;</p></td>
      <td width="801" valign="top"><table width="372" height="123" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0','width','800','height','50','hspace','0','vspace','0','align','middle','src','images/top','quality','high','bgcolor','#ffffff','allowscriptaccess','sameDomain','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','top' ); //end AC code
      </script>
              <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="800" height="50" hspace="0" vspace="0" align="middle">
                <param name="allowScriptAccess" value="sameDomain" />
                <param name="movie" value="top.swf" />
                <param name="quality" value="high" />
                <param name="bgcolor" value="#ffffff" />
                <embed src="images/top.swf" width="800" height="50" hspace="0" vspace="0" align="middle" quality="high" bgcolor="#ffffff" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />        
              </object></td>
        </tr>
        <tr>
          <td><table id="Table_01" width="800" height="100" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="11"><img src="images/menucabecera_01.jpg" width="800" height="30" alt=""></td>
              </tr>
              <tr>
                <td rowspan="2"><img src="images/menucabecera_02.jpg" width="19" height="70" alt=""></td>
                <td><img src="images/menucabecera_03.jpg" width="80" height="45" alt=""></td>
                <td rowspan="2"><img src="images/menucabecera_04.jpg" width="41" height="70" alt=""></td>
                <td><a href="buscar.php"><img src="images/menucabecera_05.jpg" alt="" width="103" height="45" border="0"></a></td>
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
        <?php
		if($sesion==1){
		echo "<p align='right' class='style13'> Modo administrador / <A HREF='unlog.php'>Cerrar sesion</A></p>";
		}
		else
		echo "<p align='right' class='style13'><A HREF='login.php'>Login</A></p>";
        ?>
		<table width="801" height="223" border="0">
          <tr>
            <td width="270" height="219" align="left" valign="top" bgcolor="#FFFFFF" style="background-repeat:no-repeat"><?php
			$zona = $_GET['selectzona'];
			$tipo = $_GET['selecttipo'];
			$modalidad = $_GET['selectmodalidad'];
			?>
			
			  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="280" height="400" id="animacion" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="izq.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />
<param name="wmode" value="transparent">
<embed src="izq.swf" width="280" height="400" align="middle" quality="high" bgcolor="#ffffff" name="animacion" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" wmode="transparent" />
</object>
			
			</td>
            <td width="521" align="center" valign="top">
			
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="512" height="100" id="cielo" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="cielo.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><embed src="cielo.swf" quality="high" bgcolor="#ffffff" width="512" height="100" name="cielo" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
			
			
			
			<?php // LISTA DE CASAS SEGUN LA CONSULTA
$num=4; //Numero de datos por pagina
$click=0;
$comienzo=$_GET['comienzo']; //Obtiene el nº de pagina anterior

if(!isset($comienzo))
$comienzo=0; //Si la pagina carga y comienzo no tiene ningun valor, comienzo valdrá 0
			

			$result = mysql_query("SELECT * FROM inmueble ORDER BY id_inmueble DESC LIMIT $comienzo , $num",$link);
			

if(click==0)
{
			//BOTONES SIGUIENTE Y ATRAS
$cantidad = mysql_query(" SELECT * FROM inmueble", $link); // Consulta de todas las filas de la tabla
$cuantas = mysql_num_rows($cantidad); //Obtiene el nº de filas totales de la tabla 
			
			echo "<table border='0'>
					<tr>
						<td>";
			if($comienzo!=0)//Si no es la primera pagina, en este cuadrante aparece "ATRAS"
			echo "<A HREF='" . $_SERVER['PHP_SELF'] . "?comienzo=" . ($comienzo - $num) ."'><p class='style12'><strong>&lt;&lt;Anterior</strong></A>";
			
			echo "</td>
			<td width='100%' align='center'><p class='style12'>
			";
			//FIN ATRAS <----------------------------
			$contador=0;
			$pagina=1;
			while($row = mysql_fetch_array($cantidad)) //Mientras haya datos...
         { 
			if($contador==0){
			if (($comienzo/$num+1)!=$pagina){
			echo "<A HREF='". $_SERVER['PHP_SELF'] . "?comienzo=" . (($pagina-1)*$num) . "'>".$pagina."</A>";
			echo "&nbsp;";
			}
			else{
			echo $pagina;
			echo "&nbsp;";
			}
			$pagina = $pagina + 1;
			}
			
		 	$contador = $contador + 1;
			if($contador==$num)
			$contador=0;
		 }
		 
		 			echo "
				</td>
				  <td>";
		 
		 //SIGUIENTE-------------------------->

			
			if(($comienzo==0 OR ($comienzo + $num)< $cuantas) AND $cuantas>$num)//SIGUIENTE
			echo "<A HREF='". $_SERVER['PHP_SELF'] . "?comienzo=" . ($comienzo + $num) . "'><p class='style12'><strong>Siguiente>></strong></A>";
			
			echo "</p></td>
				</table>";
			
			//BOTONES SIGUIENTE Y ATRAS FIN
			
}

$click=1;			

			
			while($row = mysql_fetch_array($result)) //Mientras haya datos...
         { 
		 if($row['id_modalidad']==1)
		 $varmodalidad = "Se vende.";
		 if($row['id_modalidad']==2)
		 $varmodalidad = "Se alquila.";
		 if($row['id_modalidad']==3)
		 $varmodalidad = "Se alquila/Se vende.";
		 
		 $noid = $row['id_tipo'];
		 $var = mysql_query("SELECT * FROM tipo WHERE id_tipo=$noid",$link);
		 while($varia = mysql_fetch_array($var))
		 $vartipo = $varia['descripcion'];
		 ;
		 
		 $noid2 = $row['id_zona'];
		 $var2 = mysql_query("SELECT * FROM zona WHERE id_zona=$noid2",$link);
		 
		 while($varia2 = mysql_fetch_array($var2))
		 {
		 	$varzona = $varia2['nombre'];
		 }
		
		 if (!$var2) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $var2;
    die($message);
}

		 echo 
		 "<table width='100%' border='0' cellpadding='0' cellspacing='0'>
	<tr>
		<td width='16' 	align='left' valign='bottom'>
			<img src='images/backindex_01.jpg' width='16' height='12' alt=''></td>
		<td width='138' td height='12' background='images/backindex_02.jpg'></td>
		<td width='13' align='left' valign='bottom'>
			<img src='images/backindex_03.jpg' width='13' height='12' alt=''></td>
	</tr>
	<tr>
	  <td height='19' background='images/backindex_04.jpg'>	  </td>
		<td width='100%' align='left' valign='top' bgcolor='396bff'><p class='style10'>
		
		
		
	
		
	<table width='100%' border='0' name'CENTRAL1' >
	<p class='style10'>
  <tr>
    <td width='95'><p class='style11'><strong>";
	
	if($sesion==1)
	echo "<strong>ID: ".$row['id_inmueble']."</strong>&nbsp;&nbsp;&nbsp;&nbsp;";
	
	echo "Fecha:</strong> ".$row['fecha_insercion']."&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Modalidad:</strong> ".$varmodalidad."</p></td>
  </tr>
		
		<table width='100%' border='0' name'CENTRAL' cellpadding='0' cellspacing='0'>
		<p class='style10'>
  <tr>
    <td><p class='style10'><strong>Tipo: </strong></p></td>
    <td><p class='style10'>".$vartipo."</td>
    <td><p class='style10'><strong>Zona:</strong></p></td>
    <td><p class='style10'>".$varzona."</td>
  </tr>
		<tr cellpadding='0' cellspacing='0'>
		   <p class='style10'><strong>Direccion: </strong>".$row['direccion']."
		</tr>

  <tr>
    <td><p class='style10'><strong>Estado:</strong></p></td>
    <td><p class='style10'>".$row['estado']."</td>
    <td><p class='style10'><strong>Metros:</strong></p></td>
    <td><p class='style10'>".$row['n_metros']."</td>
  </tr>
  <tr>
    <td><p class='style10'><strong>Habitaciones:</strong></p></td>
    <td><p class='style10'>".$row['num_habitaciones']."</td>
    <td><p class='style10'><strong>Ba&ntilde;os:</strong></p></td>
    <td><p class='style10'>".$row['num_banos']."</td>
  </tr>
  <tr>
    <td><p class='style10'><strong>Planta: </strong></p></td>
    <td><p class='style10'>".$row['planta']."</td>
    <td><p class='style10'><strong>Ascensor:</strong></p></td>
    <td><p class='style10'>".$row['ascensor']."</td>
  </tr>
  <tr>
    <td><p class='style10'><strong>Otros:</strong></p></td>
    <td><p class='style10'>".$row['otros']."</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><p class='style10'><strong>Telefono</strong></p></td>
    <td><p class='style10'>".$row['telefono']."</td>
    <td><p class='style10'><strong>Hora contacto: </strong></p></td>
    <td><p class='style10'>".$row['hora_contacto']."</td>
  </tr>
  <tr>
    <td><p class='style10'><strong>Email</strong></p></td>
    <td><p class='style10'><A HREF='mailto:".$row['email']."'>Contactar</A></td>
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
    <td>";
	if($sesion==1)
	{
	$registro = $row['id_inmueble'];
	echo "<a href='eliminar.php?registro=".$registro."'><img src='images/elim.gif' width='15' height='15' border='0'></a> | <a href='modificar.php?id=".$registro."'><img src='images/edit.gif' width='15' height='15' border='0'></a>";
	}
	
	echo "</td>
   	<td></td>
    <td></td>
    <td><p class='style10'><strong>Precio:</strong>&nbsp;&nbsp;".$row['precio']."&nbsp;&euro;</p></td>
  </tr>
</table>
		
		
		
		
		
		
		
		</p></td>
	  <td height='19' background='images/backindex_06.jpg'>	  </td>
	</tr>
	<tr>
		<td height='13'>
			<img src='images/backindex_07.jpg' width='16' height='13' alt=''></td>
		<td height='13' background='images/backindex_08.jpg'></td>
		<td>
			<img src='images/backindex_09.jpg' width='13' height='13' alt=''></td>
	</tr>
</table> <br>";
		 }
		 //BOTONES SIGUIENTE Y ATRAS
$cantidad = mysql_query(" SELECT * FROM inmueble", $link); // Consulta de todas las filas de la tabla
$cuantas = mysql_num_rows($cantidad); //Obtiene el nº de filas totales de la tabla 
			
			echo "<table border='0'>
					<tr>
						<td>";
			if($comienzo!=0)//Si no es la primera pagina, en este cuadrante aparece "ATRAS"
			echo "<A HREF='" . $_SERVER['PHP_SELF'] . "?comienzo=" . ($comienzo - $num) ."'><p class='style12'><strong>&lt;&lt;Anterior</strong></A>";
			
			echo "</td>
			<td width='100%' align='center'><p class='style12'>
			";
			//FIN ATRAS <----------------------------
			$contador=0;
			$pagina=1;
			while($row = mysql_fetch_array($cantidad)) //Mientras haya datos...
         { 
			if($contador==0){
			if (($comienzo/$num+1)!=$pagina){
			echo "<A HREF='". $_SERVER['PHP_SELF'] . "?comienzo=" . (($pagina-1)*$num) . "'>".$pagina."</A>";
			echo "&nbsp;";
			}
			else{
			echo $pagina;
			echo "&nbsp;";
			}
			$pagina = $pagina + 1;
			}
			
		 	$contador = $contador + 1;
			if($contador==$num)
			$contador=0;
		 }
		 
		 			echo "
				</td>
				  <td>";
		 
		 //SIGUIENTE-------------------------->

			
			if(($comienzo==0 OR ($comienzo + $num)< $cuantas) AND $cuantas>$num)//SIGUIENTE
			echo "<A HREF='". $_SERVER['PHP_SELF'] . "?comienzo=" . ($comienzo + $num) . "'><p class='style12'><strong>Siguiente>></strong></A>";
			
			echo "</p></td>
				</table>";
			
			//BOTONES SIGUIENTE Y ATRAS FIN
			

			
			?>        
			 </td>
          </tr>
        </table>
        <p></p>
        <p>
</td>
      <td width="78" height="875" valign="top" background="images/lateralder.png" nowrap="nowrap">&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
