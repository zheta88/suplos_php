<?php
include("db/import_db.php");
?>
<?php
header('Content-type:application/xls');
header('Content-Disposition: attachment; filename=reporte.xls');
$consultaCiudad=$_POST['Ciudad'];
$consultaTipo=$_POST['Tipo'];

$sql = "SELECT * FROM datos_generales WHERE  Ciudad='".$consultaCiudad."' AND Tipo='".$consultaTipo."'";
$result=mysqli_query($connect, $sql);

?>

<table>
    <tr>
        <th>Id</th>
        <th>Direccion</th>
        <th>Ciudad</th>
        <th>Telefono</th>
        <th>Codigo_Postal</th>
        <th>Tipo</th>
        <th>Precio</th>
    </tr>
    <?php
        while($row= mysqli_fetch_array($result)){
    ?>
        <tr>
            <td><?php echo $row['Id']?></td>
            <td><?php echo $row['Direccion']?></td>
            <td><?php echo $row['Ciudad']?></td>
            <td><?php echo $row['Telefono']?></td>
            <td><?php echo $row['Tipo']?></td>
            <td><?php echo $row['Ciudad']?></td>
            <td><?php echo $row['Tipo']?></td>
        </tr>
    <?php
        }
    ?>
</table>