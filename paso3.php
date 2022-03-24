<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Primer arxiu PHP</h1>
    <h2>Transparencias PHP in Action</h2>
    <h3>Activitat P1.1</h3>
    <h4>El bateig de PHP</h4>
    <p>Fer un progrma amb php que mostri per pantalla el dia i la hora amb el següent format de sortida:</p>
    <p>"Dissabte, Febrer 12 de 2022 i són les 09:18:15 hores"</p>
    // Això 
    <br>
    <?php




        echo "<p>Hola, Món 2</p>";
        echo date("Y");
        echo "<br>";
        echo "La hora actual es " . date("d-m-Y h:i:sa");
        echo "<br>";
        
        echo "La hora actual es " . date("d")." de " .date("m") .date("y"). " i són les ". date("h:i:s"). " hores";
        echo "<br>";

        $d=strtotime("10:30pm April 15 2014");
        echo "Created date is " . date("Y-m-d h:i:sa", $d);






    ?>


</body>
</html>