<?php
session_start();
$des = $_GET['descarga'];
session_register("des");

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
  <table width="947" height="229" border="0" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0">
    <tr>
      <td width="71" height="875" valign="top" background="images/lateralizq.png" nowrap="nowrap"><p>&nbsp;</p>
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
                <td width="19" rowspan="2"><img src="images/menucabecera_02.jpg" width="19" height="70" alt=""></td>
                <td width="80"><a href="index.php"><img src="images/menucabecera_03.jpg" alt="" width="80" height="45" border="0"></a></td>
                <td width="41" rowspan="2"><img src="images/menucabecera_04.jpg" width="41" height="70" alt=""></td>
                <td width="103"><a href="buscar.php"><img src="images/menucabecera_05.jpg" alt="" width="103" height="45" border="0"></a></td>
                <td width="40" rowspan="2"><img src="images/menucabecera_06.jpg" width="40" height="70" alt=""></td>
                <td width="143"><img src="images/menucabecera_07.jpg" width="143" height="45" alt=""></td>
                <td width="36" rowspan="2"><img src="images/menucabecera_08.jpg" width="36" height="70" alt=""></td>
                <td width="155"><a href="descargas.php"><img src="images/menucabecera_09.jpg" alt="" width="155" height="45" border="0"></a></td>
                <td width="36" rowspan="2"><img src="images/menucabecera_10.jpg" width="36" height="70" alt=""></td>
                <td width="129"><a href="contacto.php"><img src="images/menucabecera_11.jpg" alt="" width="129" height="45" border="0"></a></td>
                <td width="18" rowspan="2"><img src="images/menucabecera_12.jpg" width="18" height="70" alt=""></td>
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
		<p>
		
		<?php
		
				$ataque = mysql_query("SELECT * FROM descargas WHERE id_descarga=$des",$link);
				
 if (!$ataque) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $ataque;
    die($message);
}

				
				 while($row3 = mysql_fetch_array($ataque)) //Mientras haya datos...
      		   { 
		 		$titulo = $row3['titulo'];
				$descripcion = $row3['descripcion'];
				$fichero = $row3['nombre_fichero'];
			  	}
		


		?>
		
        <table border='0' cellpadding='0' cellspacing='0' align='center'>
          
		  <tr>
            <td width='16' 	align='left' valign='bottom'><img src='images/backindex_01.jpg' width='16' height='12' alt=''></td>
            <td width='138' td height='12' background='images/backindex_02.jpg'></td>
            <td width='13' align='left' valign='bottom'><img src='images/backindex_03.jpg' width='13' height='12' alt=''></td>
          </tr>
          <tr>
            <td height='19' background='images/backindex_04.jpg'></td>
            <td align='left' valign='top' bgcolor='396bff'><div align='center'>
              <form name='modificadescarga' method='post' action='modificardescarga2.php'>
                <table width='424' border='0'>
				<strong class='style10'>Modificar descarga: <? echo $des; ?></strong>
				<br>
                    <tr>
                      <td width='161'><strong class='style10'>T&iacute;tulo: </strong></td>
                      <td width='247'><input name='titulo' type='text' size='40' maxlength='40' value="<?php echo $titulo;?>"></td>
                    </tr>
                    <tr>
                      <td><strong class='style10'>Descripci&oacute;n: </strong></td>
                      <td><input name='descripcion' type='text' size='40' maxlength='40'  value="<?php echo $descripcion;?>"></td>
                    </tr>
                    <tr>
                      <td><strong class='style10'>Nombre del fichero: </strong></td>
                      <td><input name='fichero' type='text' size='40' maxlength='40'  value="<?php echo $fichero;?>"></td>
                    </tr>
                  </table>
                  <p>
                    <label>
                    <input type='submit' name='anunciar' value='Modificar'>
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
		
		</p></td>
      <td width="76" height="875" valign="top" background="images/lateralder.png" nowrap="nowrap">&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
