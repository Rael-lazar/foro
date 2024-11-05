<?php
function usuarioOk($usuario, $contraseña) :bool {
  
   return (strlen($usuario)>=8 && $contraseña==strrev($usuario));

}

function prevencion ($texto){

   return htmlspecialchars($texto);


}


function letrarepetida($cadena){
$veces="";
$ganadora="";

for ($i=0; $i < strlen($cadena); $i++) { 
    $contador=0;
    for ($j=0; $j < strlen($cadena); $j++) { 
        if ($cadena[$i]==$cadena[$j]) {
            $contador++;
        }
    }
    if ($contador>$veces) {
        $veces=$contador;
        $ganadora=$cadena[$i];
    }
}
return $ganadora;
}


function palabrarepetida($cadena){
$veces="";
$ganadora="";

$palabras=explode(" ", $cadena);

for ($i=0; $i < count($palabras); $i++) {
    $contador=0;
    for ($j=0; $j < count($palabras); $j++) {
        if ($palabras[$i]==$palabras[$j]) {
            $contador++;
        }
    }
    if ($contador>$veces) {
        $veces=$contador;
        $ganadora=$palabras[$i];
    }
}
return $ganadora;
}