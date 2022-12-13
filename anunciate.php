<?php
session_start();
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
		<p align="center">
		
		<body bgcolor="#ffffff">
<!--url's used in the movie-->
<!--text used in the movie-->
<!-- saved from url=(0013)about:internet -->
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="520" height="100" id="anunciate" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="anunciate.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><embed src="anunciate.swf" quality="high" bgcolor="#ffffff" width="520" height="100" name="anunciate" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
		
		</p>
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
		<td align='left' valign='top' bgcolor='396bff'><div align="center">
		  <form name="anuncio" method="post" action="anunciate2.php">
		    <table width="420" border="0">
              <tr>
                <td width="148"><p class='style10'><strong>Modalidad:</strong></td>
                <td width="256"><span class="style11">
                  <select name="selectmodalidad">
                    <?php
			  include("conexion.php");
			  $link=conectarse();
				  
			  $result = mysql_query("SELECT * FROM modalidad", $link); //Consulta de las modalidades
			  
				while($row = mysql_fetch_array($result)) //Mientras haya datos...
      		   { 
		 		echo "<option value='".$row['id_modalidad']."'>".$row['descripcion']."</option>";
			  	}
			  ?>
                  </select>
                </span></td>
              </tr>
              <tr>
                <td><p class='style10'><strong>Tipo:</strong></td>
                <td><span class="style11">
                  <select name="selecttipo">
                    <?php
			  $result = mysql_query("SELECT * FROM tipo", $link); //Consulta de las modalidades
			  
				while($row = mysql_fetch_array($result)) //Mientras haya datos...
      		   { 
		 		echo "<option value='".$row['id_tipo']."'>".$row['descripcion']."</option>";
			  	}
			  ?>
                  </select>
                </span></td>
              </tr>
              <tr>
                <td><p class='style10'><strong>Zona:</strong></td>
                <td><span class="style11">
                  <select name="selectzona">
                    <?php
			  $result = mysql_query("SELECT nombre, id_zona FROM zona", $link); //Consulta de las zonas
		
              
				while($row = mysql_fetch_array($result)) //Mientras haya datos...
      		   { 
		 		echo "<option value='".$row['id_zona']."'>".$row['nombre']."</option>";
			  	}
			  ?>
                  </select>
                </span></td>
              </tr>
			  <tr>
			  	<td>
				<p class='style10'><strong>Direccion:</strong>
				</td>
				<td><input name="direccion" type="text" size="30" maxlength="30">				</td>
			  </tr>
              <tr>
                <td><p class='style10'><strong>Estado:</strong></td>
                <td><label>
                  <select name="selectestado">
                    <option value="Nueva">Nueva</option>
                    <option value="Reformada">Reformada</option>
                    <option value="Bueno">Bueno</option>
                    <option value="Pesimo">Pesimo</option>
                    <option value="Regular">Regular</option>
                  </select>
                </label></td>
              </tr>
              <tr>
                <td><p class='style10'><strong>Metros&sup2;:</strong></td>
                <td><label>
                  <input name="metros" type="text" size="4" maxlength="4">
                </label></td>
              </tr>
              <tr>
                <td><p class='style10'><strong>Habitaciones:</strong></td>
                <td><select name="habitaciones">
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
                </select></td>
              </tr>
              <tr>
                <td><p class='style10'><strong>Ba&ntilde;os:</strong></td>
                <td><select name="banos">
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
                </select></td>
              </tr>
              <tr>
                <td><p class='style10'><strong>Planta:</strong></td>
                <td><select name="planta">
                    <option value="0">Unifamiliar</option>
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
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                </select></td>
              </tr>
              <tr>
                <td><p class='style10'><strong>Ascensor:</strong></td>
                <td><label>
                  <select name="ascensor">
                    <option value="No">No</option>
                    <option value="S&iacute;">S&iacute;</option>
                  </select>
                </label></td>
              </tr>
              <tr>
                <td><p class='style10'><strong>Otros:</strong></td>
                <td><label>
                  <input name="otros" type="text" size="30" maxlength="30">
                </label></td>
              </tr>
              <tr>
                <td><p class='style10'><strong>Telefono:</strong></td>
                <td><input name="telefono" type="text" size="9" maxlength="9"></td>
              </tr>
              <tr>
                <td><p class='style10'><strong>Hora de contacto:</strong></td>
                <td><input name="horadecontacto" type="text" size="30" maxlength="30">
                </td>
              </tr>
              <tr>
                <td><p class='style10'><strong>Email:</strong></td>
                <td><input name="email" type="text" size="40" maxlength="40"></td>
              </tr>
              <tr>
                <td><p class='style10'><strong>Precio final:</strong></td>
                <td><p class='style10'>
                  <input name="precio" type="text" size="12" maxlength="12">
                    <strong>&euro;</strong></td>
              </tr>
            </table>
                    <p>
                      <label>
                      <input type="submit" name="anunciar" value="Anunciar">
                      </label>
                    </p>
		  </form>
		  </div>
		  <p align="center" class='style10'>
	
		
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
