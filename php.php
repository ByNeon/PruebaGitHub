<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];
        $numero4 = $_POST['numero4'];
        $numero5 = $_POST['numero5'];
        $numero6 = $_POST['numero6'];
        
        $suma = array ($numero1,$numero2,$numero3,$numero4,$numero5,$numero6);
        
        foreach ($suma as $key) {
            $sumatotal=$sumatotal+$key;
            $contador++;
            if($key%2==0)$contadorpares++;
        }
        
        $media=$sumatotal/$contador;
        
        echo "Suma de los numero: $sumatotal <br>";
        echo "La media de los numeros es: $media <br>";
        echo "Hay $contadorpares numeros pares <br>";
        ?>
    </body>
</html>
