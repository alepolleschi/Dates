<?php
$nombre=$_POST["first-name"];
$tel=$_POST["last-name"];
$mail=$_POST["email"];

// Varios destinatarios
$para  = 'marcostapia1711@gmail.com';

// título
$titulo = 'Consulta sitio Web';

// mensaje
$mensaje = '
<html>
<head>
  <title>Consulta sitio web</title>
</head>
<body>
  <table cellpadding="16px" style="font-family: Georgia, serif;
  background: white;
  font-size: 16px;
  font-weight: lighter;
  text-rendering: optimizeLegibility;
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 900px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;">
<thead>
<tr>
<th class="text-center" style="border-top-left-radius:3px;   border-top-right-radius:3px;border-right:none; background: #1d4263/*Este es el color del Titulo*/; color: #eeeeee; font-size:22px;
  font-weight: 100;
  padding:22px;
  text-align:center;
  vertical-align:middle;" colspan="4">CONTACTO DESDE EL SITIO WEB</th> <!--Titulo del Form-->
</tr>
</thead>
<tbody bgcolor="#FFFFFF"  style="color:#666B85;">
<!--Alternar uno con color #EBEBEB y otro vacio-->
<tr bgcolor="#EBEBEB">
  <td width="33%">Nombre:</td> <!--Fila 1 - Primera Columna-->
  <td width="66%">'.$nombre.'</td> <!--Fila 1 - Segunda Columna-->
</tr>
<tr>
  <td>Telefono:</td>
  <td>'.$tel.'</td>
</tr>  
<tr bgcolor="#EBEBEB">
  <td>Mail:</td>
  <td>'.$mail.'</td>
</tr>

</tbody>
</table>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
//$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Nero Agenzia <consultas@dates.neroagenzia.com>' . "\r\n";

// Enviarlo
mail($para, $titulo, $mensaje, $cabeceras);

header("Location: http://dates.neroagenzia.com");
?>