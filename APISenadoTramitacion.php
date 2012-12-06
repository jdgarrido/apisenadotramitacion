
<?php
/*
 * Datos Abierto Legislativo
 * http://www.senado.cl/datos-abiertos-legislativos/prontus_senado/2012-11-27/154842.html
 * ej:
 * 		http://www.senado.cl/wspublico/tramitacion.php?boletin=8575
 * 		http://www.senado.cl/wspublico/tramitacion.php?fecha=28/11/2012
 * 
 * toma el XML y retorna un JSON :)
 * */
class APISenadoTramitacion {
	private $baseUri  = 'http://www.senado.cl/wspublico/';
	
	public function boletin($idTramite) {
		$xml = simplexml_load_file($this->baseUri."tramitacion.php?boletin=".intval($idTramite));
		$json = json_decode(json_encode($xml));
		
		return $json;
	}
	
	public function fecha($strFecha) {
		$aSeparadores = array('.', '-');
		$strFecha = str_replace($aSeparadores, '/', $strFecha);
		
		$xml = simplexml_load_file($this->baseUri."tramitacion.php?fecha=".$strFecha);
		$json = json_decode(json_encode($xml));
		
		return $json;
	}
}
?>
