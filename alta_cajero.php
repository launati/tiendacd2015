<?php
echo "<html>
        <head><title>::FORMULARIOS PARA INSERTAR::</title></head>
        <body>";
        //verifica que se selecciono
        if ($_GET['id']==1){//inserta cajeros
        	//muestra el formulario para cajero}
        	echo 
        	"<h2>CAPTURA LOS DATOS DEL NUEVO CAJERO</h2>
        	<form name ='inserta' method='post' action='$PHP_SELF'>
        	<strong> Nombre:</strong><input type='text' name='nombre'><br/>
        	<strong> Pass:</strong>(no mayor a 5 caracteres) <input type='text' name='pass'><br/>
maxlength='5'><br/>
            <strong> Permisos:</strong>
            <select name = 'permisos'>
                 <option value ='1'>Solo ventas</option>
                 <option value ='2'>Reportes y ventas</option>
 			</select>
 			<input type='submit' name='boton' value='Alta_Cajero'>
 			</form>";
 		}//fin del if get


        	