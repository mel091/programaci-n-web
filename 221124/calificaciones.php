<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
</head>
<body>
    <h1>Calificaciones</h1>

    <?php
        $alumnos = [
            "Sarahí Gómez" => [8,9,7,6,9],
            "Carolina Guadalupe" => [10,9,10,5,7],
            "José Gonzáles" => [9,9,9,10,10],
            "Mariela Rizo" => [8,9,7,8,9],
            "Angie Román" => [10,10,7,6,10]
        ]
    ?>

    <table border="1" cellpadding='5'>
        <tr>
            <td>Alumno</td>
            <td> Unidad I</td>
            <td> Unidad II</td>
            <td> Unidad III</td>
            <td> Unidad IV</td>
            <td> Unidad V</td>
            <td> Promedio general</td>
        </tr>

        <?php
            foreach($alumnos as $nombre => $calificaciones){
                $promedio = array_sum($calificaciones) / count ($calificaciones); 
        ?>
                <tr>
                    <td><?php echo $nombre; ?></td>
                    <td><?php echo $calificaciones[0]; ?></td>
                    <td><?php echo $calificaciones[1]; ?></td>
                    <td><?php echo $calificaciones[2]; ?></td>
                    <td><?php echo $calificaciones[3]; ?></td>
                    <td><?php echo $calificaciones[4]; ?></td>
                    <td><?php echo number_format($promedio, 1)?></td>
                </tr>
        <?php
            }  
        ?>

    </table>


   
</body>
</html>