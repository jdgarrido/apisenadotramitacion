<?php
require_once('APISenadoTramitacion.php');

$tramitacion = new APISenadoTramitacion();

$return = $tramitacion->boletin(8575);
echo '<h2>Boletín</h2>';
echo $return->proyecto->descripcion->boletin.' : '.$return->proyecto->descripcion->titulo.'<br />';

$strFecha = '28.11.2012'; //puede ser en formato dd/mm/aaaa or dd.mm.aaaa or dd-mm-aaaa
$return = $tramitacion->fecha($strFecha);

echo '<h2>Fecha</h2>';
foreach($return->proyecto as $p) {
	echo $p->descripcion->boletin.' : '.$p->descripcion->titulo.'<br />';
}
?>
