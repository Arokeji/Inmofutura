<?php
session_start();
?>

<head>



<?php
include("conexion.php");
$link=conectarse();

$direccion = $_POST['direccion'];
$metros = $_POST['metros'];
$habitaciones = $_POST['habitaciones'];
$banos = $_POST['banos'];
$estado = $_POST['selectestado'];
$planta = $_POST['planta'];
$ascensor = $_POST['ascensor'];
$otros = $_POST['otros'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$horadecontacto = $_POST['horadecontacto'];
$tipo = $_POST['selecttipo'];
$modalidad = $_POST['selectmodalidad'];
$zona = $_POST['selectzona'];
$precio = $_POST['precio'];


		if(!is_numeric($precio) OR !is_numeric($telefono) OR !is_numeric($metros)){
echo "<script>alert('Alguno de los datos es incorrecto.');</script>";
echo "<script>history.back();</script>";

}

?>

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
	font-size: 14px;
	color: #FFFFFF;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #C4DAFB;
}
.style11 {	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #FFFFFF;
}
-->
</style><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<body>
<div align="center">
  <table width="955" height="229" border="0" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0">
    <tr>
      <td width="65" height="875" valign="top" background="images/lateralizq.png" nowrap="nowrap"><p>&nbsp;</p>
      <p>&nbsp;</p></td>
      <td width="800" valign="top"><table width="372" height="123" border="0" cellpadding="0" cellspacing="0">
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
                <td><a href="index.php"><img src="images/menucabecera_03.jpg" alt="" width="80" height="45" border="0"></a></td>
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
        
		
		

		
		<p>&nbsp;</p>
		<table border='0' cellpadding='0' cellspacing='0' align="center">
	<tr>
		<td width='16' 	align='left' valign='bottom'>
			<img src='images/backindex_01.jpg' width='16' height='12' alt=''></td>
		<td width='138' td height='12' background='images/backindex_02.jpg'></td>
		<td width='13' align='left' valign='bottom'>
			<img src='images/backindex_03.jpg' width='13' height='12' alt=''></td>
	</tr>
	<tr>
	  <td height='19' background='images/backindex_04.jpg'>	  </td>
		<td align='left' valign='top' bgcolor='396bff'>
		<p align="center" class='style10'>
		<?php
if(is_numeric($precio) AND is_numeric($telefono) AND is_numeric($metros)){
echo "<meta http-equiv='refresh' content='3;URL=index.php'>";
echo "Su anuncio ha sido modificado con éxito.";
}
$ide = $ide;
$actualiza = mysql_query("UPDATE inmueble SET id_inmueble = $ide, direccion = '$direccion', n_metros = $metros, num_habitaciones = $habitaciones, num_banos = $banos, estado = '$estado', planta = $planta, ascensor = '$ascensor', otros = '$otros',telefono = $telefono,email = '$email',hora_contacto = '$horadecontacto', fecha_insercion = NOW(), id_tipo = $tipo, id_modalidad = $modalidad, id_zona = $zona, precio = $precio WHERE id_inmueble = $ide", $link);
					 if (!$actualiza) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $actualiza;
    die($message);
}
mysql_close ($link);
		?>
		
	    </td>
	  <td height='19' background='images/backindex_06.jpg'>	  </td>
	</tr>
	<tr>
		<td height='13'>
			<img src='images/backindex_07.jpg' width='16' height='13' alt=''></td>
		<td height='13' background='images/backindex_08.jpg'></td>
		<td>
			<img src='images/backindex_09.jpg' width='13' height='13' alt=''></td>
	</tr>
</table>





</td>
      <td width="76" height="875" valign="top" background="images/lateralder.png" nowrap="nowrap">&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
