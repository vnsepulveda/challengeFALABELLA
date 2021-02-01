<html>
 <head>
  <title>Challenge FALABELLA</title>
 </head>
 <body>
 <?php 
    $opciones = ["Falabella", "IT", "Integraciones"];
    $multiplos=array();
    for ($i = 1; $i <= 100; $i++){
        echo chequeoMultiplo($i, $multiplos, $opciones)."<br>";
    }

    function chequeoMultiplo($i, $multiplos, $opciones){
        $multiplo3 = ($i % 3 );
        $multiplo5 = ($i % 5 );
        $multiplo3y5 = $multiplo3 + $multiplo5;
        $numeroActual = $i;
        $multiplos = [$multiplo3, $multiplo5, $multiplo3y5];
        $x = 0;
        for ($x = 0; $x < count($opciones) ; $x++){
            if($multiplos[$x] == 0){
                $numeroActual = $opciones[$x];
            }
        }
        return $numeroActual;
    }
 ?>
 </body>
</html>