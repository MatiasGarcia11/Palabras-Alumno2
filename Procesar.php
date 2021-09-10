<?php

require 'Palabras.php';
$p = new Palabra($_GET['palabra']);
$resultados = $p->contador();

echo "La cantidad de vocales son: {$resultados['vocales']}. <br>";
echo "La cantidad de consonantes: {$resultados['consonantes']}.";

?>