<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1y3</title>
    <style>
        <?php
            if ($_SERVER['PHP_SELF'] == '/mirepocopy.git/exe3/acti5672.php')
                {   class pintar{
                        const BACKGROUND_COLOR = "Cornsilk";
                        const LINKS_COLOR = "Magenta";
                        const H1_COLOR = "lightblue";
                        };
                }
            else{   class pintar{
                        const BACKGROUND_COLOR = "SlateGray";
                        const LINKS_COLOR = "Lime";
                        const H1_COLOR = "Blue";
                        };
                };

            

        
            echo "body {
                        background-color:  ".pintar::BACKGROUND_COLOR ."
                    }

                  a {
                    color: ".pintar::LINKS_COLOR." 
                    }

                  h1 {
                    color: ".pintar::H1_COLOR." 
                    }
                "

        ?>

    .button {
        display: inline-block;
        padding: 15px 25px;
        font-size: 24px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
    }

    .button:hover {background-color: #3e8e41}

    .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }


</style>
    
</head>
<body >
    <h1>Activitat p1.3</h1>
    <h4>Començament exercici</h4>
    <h6>repositorio global 18</h6>
      <?php //tall per sapiguer el arxiu
        print "<p>\$_SERVER[PHP_SELF]: $_SERVER[PHP_SELF]</p>\n";
    ?> 
    
    <button class="button"><a style="text-decoration:none"  href='../acti5671.php'> Fes me Click per canviar de CSS</a> </button>
    <br>
    <br>
    <p>Varia el color des de PHP</p><br>

    <p>&lt;body&gt; bacground: constant (BACKGROUND_COLOR) = al color " Cornsilk" </p><br>
    <p>&lt;a&gt; link: constant (LINKS_COLOR) = al color  "Magenta"  <a href='http://cendrassos.net'>Cendrassos.net link</a></p>
    <h1>&lt;h1&gt; lletra H1: constant (H1_COLOR) = al color "lightblue" </h1>
    
    <?php

    $a=2;
    $b=3;
    $c=1;
    if ((($b**2)-4*$a*$c)>=0){

    $px=((-$b+(sqrt(($b**2)-(4*$a*$c))) )/(2*$a)    ) ;
    $np=((-$b-(sqrt(($b**2)-(4*$a*$c))) )/(2*$a)    );
    echo "$px<br>";
    echo "$np";
    echo "<p>f(x)=ax<sup>2</sup>+bx+c=0</p> <br> <br>";
    echo "<p> -b&plusmn;";


    }
    else{

    echo "L'equació no té resolució real.";
    }
    
    ?>     

   
</body>
</html>