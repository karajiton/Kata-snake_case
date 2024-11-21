<?php   

echo 'Escribe lo que deseas' . PHP_EOL;
$oracion = readline();
$oracionMinusculas = mb_strtolower($oracion, 'UTF-8');
//echo $oracionMinusculas . PHP_EOL;
$oracionSinSignos = preg_replace('/[^a-zA-Z0-9\s]/', ' ', $oracionMinusculas);
//echo $oracionSinSignos . PHP_EOL;

$oracionSinEspacios = preg_replace('/\s+/', '_' , trim($oracionSinSignos));
echo $oracionSinEspacios;