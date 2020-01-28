<?php
date_default_timezone_set('America/Mexico_City');
$usuario25 = "cron";
$contraseña25 = "@l**pbx++t3l3";
$servidor25 = "10.9.2.29";
$baseDatos25 = "asterisk";


$conn25 = mysqli_connect($servidor25, $usuario25,$contraseña25) or die ("NO se a podido conectar al server ");
if(!$conn25){

  die("Conexion fallo!". mysqli_connect_error());


}

//echo "Conexcion lista!!";

$db25 = mysqli_select_db($conn25,$baseDatos25) or die("upps!! no se a podido conectar con la bd");


$select_prefijo="SELECT manual_dial_prefix as prefijo from vicidial_campaigns where campaign_id='0006'";

$execount = mysqli_query($conn25,$select_prefijo);

while($row=mysqli_fetch_array($execount)){
$prefijo=$row['prefijo'];

if($prefijo=='222'){

echo"<button type=\"button\" class=\"btn btn-warning\" style=\"width: 120px; height: 60px; font-size:25px;\">$prefijo</button>";


}else if($prefijo=='999'){

echo"<button type=\"button\" class=\"btn btn-success\" style=\"width: 120px; height: 60px; font-size:25px;\">$prefijo</button>";


}else if($prefijo=='11'){

echo"<button type=\"button\" class=\"btn btn-success\" style=\"width: 120px; height: 60px;font-size:25px;\">$prefijo</button>";

}else if($prefijo=='210'){

echo"<button type=\"button\" class=\"btn btn-warning\" style=\"width: 120px; height: 60px; font-size:25px;\">$prefijo</button>";

}else if($prefijo=='555'){

echo"<button type=\"button\" class=\"btn btn-danger\" style=\"width: 120px; height: 60px;font-size:25px; font-size:25px;\">$prefijo</button>";

}else if($prefijo=='444'){

echo"<button type=\"button\" class=\"btn btn-danger\" style=\"width: 120px; height: 60px;font-size:25px; font-size:25px;\">$prefijo</button>";

}

}




?>