<?php
include("db/import_db.php");
header('Content-type:application/xls');
header('Content-Disposition: attachment; filename=reporte.xls');
?>
<?php
$consultaCiudad=$_POST['Ciudad'] ?? '';
$consultaTipo = $_POST['Tipo'] ?? '';
$sql = "SELECT * FROM datos_generales WHERE  Ciudad='".$consultaCiudad."' AND Tipo='".$consultaTipo."'";
//$sql="SELECT *FROM datos_generales";
$result = mysqli_query($connect,$sql);

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
        while($mostrar= mysqli_fetch_array($result)){
    ?>
        <tr>
            <td><?php echo $mostrar['Id']?></td>
            <td><?php echo $mostrar['Direccion']?></td>
            <td><?php echo $mostrar['Ciudad']?></td>
            <td><?php echo $mostrar['Telefono']?></td>
            <td><?php echo $mostrar['Tipo']?></td>
            <td><?php echo $mostrar['Ciudad']?></td>
            <td><?php echo $mostrar['Tipo']?></td>
        </tr>
    <?php
        }
    ?>
</table>