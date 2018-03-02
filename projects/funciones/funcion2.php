<?php



function inicializar_array($numero_elementos, $min, $max) {

$lista = array();

    for($i = 0; $i < $numero_elementos; $i++) {
        $lista[$i] = rand($min, $max);


    }
    
    return $lista;
}

function calcular_media($lista) {
    $suma = 0;
    for ($i = 0; $i < count($lista);$i++) {
    $suma = $suma + $lista[$i];
    }

$media = $suma / count($lista);

return $media;


}

function calcular_maximo($lista) {
    $max = 0;
    for ($i = 0; $i < count($lista);$i++) {
    $max > $lista[$i];
    $max = $lista[$i];    
    }

return $max;

}



?>