<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafica-Covid</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.js"></script>
</head>
<body>
    <?php
    require_once("./PDO.php");
                        
                        ?>
 <canvas id="myChart" width="400" height="200"></canvas>
</body>
<script>
    var ctx = document.getElementById('myChart');
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [<?php 
               while($registro_Municipio = $resultado_Municipio->fetch()) {
                echo "'" . $registro_Municipio['Municipio']."'",",";
            };
                ?>],
            datasets: [{
                label: 'Casos covid en Quintana Roo',
                data: [
                    <?php 
                         while($registro_Municipio = $resultado_positivo->fetch()) {
                            echo $registro_Municipio['Positivos'].",";
                        };
                        ?>

                ],
                backgroundColor: [
                    'rgb( 255, 87, 51)',
                
                ],
                borderColor: ['rgb(0, 0, 0)']
            },{
                type: 'bar',
             label: 'Recuperados',
            data: [
                <?php
                       while($registro_recuperados = $resultado_recuperados->fetch()) {
                        echo "'" . $registro_recuperados['Recuperados']."'",",";
                    };

                        ?>
            ],backgroundColor: [
                    'rgb( 235, 245, 21)',
                    
                ],
            }]
        }
    });
</script>
</html>