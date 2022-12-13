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
a:link {
	color: #FF9900;
}
a:visited {
	color: #FF9900;
}
-->
</style><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<body>
<div align="center">
  <table width="950" height="229" border="0" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0">
    <tr>
      <td width="76" height="875" valign="top" background="images/lateralizq.png" nowrap="nowrap"><p>&nbsp;</p>
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
                <td><img src="images/menucabecera_09.jpg" width="155" height="45" alt=""></td>
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
        
		
		

		
		<p><?php
		if($sesion==1){
				echo "<p align='right' class='style13'> Modo administrador / <A HREF='unlog.php'>Cerrar sesion</A></p>";
		}
		else
		echo "<p align='right' class='style13'><A HREF='login.php'>Login</A></p>";
        ?></p>
		<p align="center">
		
		<body bgcolor="#ffffff">
<!--url's used in the movie-->
<!--text used in the movie-->
<!-- saved from url=(0013)about:internet -->
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="520" height="100" id="descargas" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="descargas.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><embed src="descargas.swf" quality="high" bgcolor="#ffffff" width="520" height="100" name="descargas" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
		
		</p>
		<p>	      <?php
		  if($sesion==1){
		  echo "
        <table border='0' cellpadding='0' cellspacing='0' align='center'>
          
		  <tr>
            <td width='16' 	align='left' valign='bottom'><img src='images/backindex_01.jpg' width='16' height='12' alt=''></td>
            <td width='138' td height='12' background='images/backindex_02.jpg'></td>
            <td width='13' align='left' valign='bottom'><img src='images/backindex_03.jpg' width='13' height='12' alt=''></td>
          </tr>
          <tr>
            <td height='19' background='images/backindex_04.jpg'></td>
            <td align='left' valign='top' bgcolor='396bff'><div align='center'>
              <form name='anuncio' method='post' action='cargar.php'>
                <table width='424' border='0'>
				<strong class='style10'>Nueva descarga</strong><br><br>
                    <tr>
                      <td width='161'><strong class='style10'>T&iacute;tulo: </strong></td>
                      <td width='247'><input name='titulo' type='text' size='40' maxlength='40'></td>
                    </tr>
                    <tr>
                      <td><strong class='style10'>Descripci&oacute;n: </strong></td>
                      <td><input name='descripcion' type='text' size='40' maxlength='40'></td>
                    </tr>
                    <tr>
                      <td><strong class='style10'>Nombre del fichero: </strong></td>
                      <td><input name='fichero' type='text' size='40' maxlength='40'></td>
                    </tr>
                  </table>
                  <p>
                    <label>
                    <input type='submit' name='anunciar' value='Anunciar'>
                    </label>
                  </p>
                </form>
            </div>
                <p align='center' class='style10'> </td>
            <td height='19' background='images/backindex_06.jpg'></td>
          </tr>
          <tr>
            <td height='13'><img src='images/backindex_07.jpg' width='16' height='13' alt=''></td>
            <td height='13' background='images/backindex_08.jpg'></td>
            <td><img src='images/backindex_09.jpg' width='13' height='13' alt=''></td>
          </tr>
        </table>
		";
  }
  ?></p>
		<div align="center">
	      <p class="style10">
	        <?php // LISTA DE CASAS SEGUN LA CONSULTA
$result = mysql_query("SELECT * FROM descargas",$link);
		
			while($row = mysql_fetch_array($result))
			{
			echo 
		 "<table width='50%' border='0' cellpadding='0' cellspacing='0'>
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
		
		
		
		
	<table width='100%' border='0' name'CENTRAL1'>
	<tr>
		<td width='100%' align='left'>
		<p class='style11'><strong>Titulo: </strong>".$row['titulo']."
		</td>
		<td align='left'>
		<p class='style11'><strong>Fecha: </strong>".$row['fecha_insercion']."
		</td>
	</tr>
	</table>	
	
	<table width='100%' border='0' name'CENTRAL1'>
	<tr>
		<td><p class='style11'><strong>Descripcion: </strong>".$row['descripcion']."</td>
	</tr>
	<tr>
		<td>";
		
			if($sesion==1)
	{
	$registro = $row['id_descarga'];
		echo "<a href='eliminardescarga.php?descarga=".$registro."'><img src='images/elim.gif' width='15' height='15' border='0'></a> | 
		<a href='modificardescarga.php?descarga=".$registro."'><img src='images/edit.gif' width='15' height='15' border='0'></a>";
	}
	echo "
		</td>
	</tr>

	<td align='center'>
		<p class='style11'><strong><A HREF='".$row['nombre_fichero']."'>Descargar</A></strong></p>
	</td>
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
		
?>
          </p>
        </div></td>
      <td width="74" height="875" valign="top" background="images/lateralder.png" nowrap="nowrap">&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
