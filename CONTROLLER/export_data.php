<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=control_asistencia_" . date('Y:m:d:m:s').".xls");

?>

    <table>
        <tr>
            <th>FECHA</th>
            <th>CI</th>
            <th>APELLIDO</th>
            <th>NOMBRE</th>
            <th>HORA</th>
            <th>TIPO DE PERSONAL</th>
            <th>CREDENCIAL</th>
            <th>LECTOR</th>
            <th>CONDICION DE CREDENCIAL</th>
            <th>CONDICION DE OPERACION</th>
            <th>OPERACION</th>
            <th>DEPARTAMENTO</th>
            <th>LOCALIDAD</th>
        </tr>

<?php

    $conexion = mysqli_connect("localhost","root", "", "gxdeve_apps", "3306");
    $sql=" SELECT *FROM m_Uload ";
    $execute=mysqli_query($conexion, $sql);
    while ($fila=mysqli_fetch_array($execute)) {



        

?>
    <tr>
        <td><?php echo $fila[0]?></td>
        <td><?php echo $fila[1]?></td>
        <td><?php echo $fila[2]?></td>
        <td><?php echo $fila[3]?></td>
        <td><?php echo $fila[4]?></td>
        <td><?php echo $fila[5]?></td>
        <td><?php echo $fila[6]?></td>
        <td><?php echo $fila[7]?></td>        
        <th>Activo</th>
        <td>N\A</td>
        <td><?php echo $fila[8]?></td>        
        <td><?php echo $fila[9]?></td>        
        <td><?php echo $fila[10]?></td>        

    </tr>

<?php } ?>


    </table>