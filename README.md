API Senado Tramitación
======================

Convierte el XML generado por el WS del Senado en un JSON :)

### Forma de uso

```php
require_once('APISenadoTramitacion.php');

$tramitacion = new APISenadoTramitacion();

$return = $tramitacion->boletin(8575);
echo $return->proyecto->descripcion->boletin.' : '.$return->proyecto->descripcion->titulo.'<br />';

$strFecha = '28.11.2012'; //puede ser en formato dd/mm/aaaa or dd.mm.aaaa or dd-mm-aaaa
$return = $tramitacion->fecha($strFecha);


foreach($return->proyecto as $p) {
  echo $p->descripcion->boletin.' : '.$p->descripcion->titulo.'<br />';
}
```

### Más información
http://www.senado.cl/datos-abiertos-legislativos/prontus_senado/2012-11-27/154842.html

eso es todo :)