<?php
        function Conectarse()
            {
            if (!($link=mysql_connect("localhost","root","mysql")))
                {
                echo "Error conectando a la base de datos.";
                exit();
                }
            if (!mysql_select_db("inmofutura",$link))
                {
                echo "Error seleccionando la base de datos.";
                exit();
                }
            return $link;			
        }
    ?>