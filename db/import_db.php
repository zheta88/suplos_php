<?php

$connect = mysqli_connect("localhost", "root" ,"", "intelcost_bienes");

#Se realizó la exportación de la db  de json a mysql
/*
$filename = "data-1.json";

$data = file_get_contents($filename);
$array = json_decode($data, true);

foreach($array as $row){

    $sql = "INSERT INTO datos_generales(Id,Direccion,Ciudad,Telefono,Codigo_Postal,Tipo,Precio)
    VALUES ('".$row["Id"]." ' ,'".$row["Direccion"]. "','".$row["Ciudad"]. "' ,'".$row["Telefono"]."' ,'".$row["Codigo_Postal"]."','".$row["Tipo"]."','".$row["Precio"]."' )";
   mysqli_query($connect,$sql);

   
}
echo "data insertada correctamente";
*/

?>