<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tipos de Datos en PHP</title>
</head>
<body>
    <h1>Tipos de Datos en PHP</h1>
    <h3>Principales tipos de datos:</h3>
    <ul>
        <li>
            <strong>Integer:</strong> 
            <p>Son números del conjunto {..., -2, -1, 0, 1, 2, ...}. <br>Pueden especificarse en decimal, hexadecimal, octal o binaria.</p>
            <?php 
            $entero = 10; 
            echo "Por ejemplo, un entero es: $entero"; 
            ?>
        </li>
        <br>
        <li>
            <strong>Float:</strong> 
            <p>Representan números que contienen punto decimal. <br>El tamaño de un float dependerá de la plataforma, aunque un valor común consiste en un máximo de aproximadamente 1.8e308 (formato de 64 bits del IEE).</p>
            <?php 
            $decimal = 3.14; 
            echo "Un decimal es: $decimal"; 
            ?>
        </li>
        <br>
        <li>
            <strong>String:</strong> 
            <p> Un string es una serie de caracteres donde cada carácter es lo mismo que un byte.<br>Los string se pueden especificar de la siguiente manera:</p>
            <ul>
                <li>Comilla doble</li>
                <li>Comilla sencilla</li>
                <li>Heredoc</li>
                <li>Nowdoc</li>
            </ul>
            <br>
            <?php 
            $texto = "Hola, mundo"; 
            echo "Una cadena de texto es: \"$texto\""; 
            ?>
        </li>
        <br>
        <li>
            <strong>Boolean:</strong> 
            <p>Representa un valor que puede ser true o false.</p>
            <?php 
            $verdadero = true; 
            echo "Un booleano es: " . ($verdadero ? "true" : "false"); 
            ?>
        </li>
        <br>
        <li>
            <strong>Array:</strong> 
            <p> Los arreglos en PHP son en realidad un mapa ordenado. Los 
            mapas son tipos de datos que asocia valores con un claves. 
            Puede emplear como array, lista(vector), tabla hash, diccionario, colección, pila y cola. <br>Los arreglos se pueden crear utilizando el constructor array() o 
            mediante [];.</p>
            <?php 
            $arreglo = [1, 2, 3]; 
            echo "Un ejemplo de arreglo es: [" . implode(", ", $arreglo) . "]"; 
            ?>
        </li>
    </ul>
</body>
</html>
