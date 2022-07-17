<?php
	header("Content-Type: image/png");
	require_once '../../vendor/autoload.php';
	use Laminas\Soap\Client;	
	$url = "http://localhost/producto3/soap/poligono/servidor.php";
	$ac = array(
		'location' => $url,
		'uri' => "http://localhost/producto3/soap/poligono/"
	);
	$cliente = new Client(null, $ac);
	
	// http://localhost:8080/producto3/soap/poligono/cliente.php?l=5&r=50&cx=50&cy=50
	$lados = $_GET['l']; 
	$radio = $_GET['r']; 
	$centrox = $_GET['cx']; 
	$centroy = $_GET['cy'];
	$ap = $cliente->calcularPuntosPoligonoEnCirculo($lados, $radio, $centrox, $centroy);
	$nea = count($ap);
	
	$ancho = 2 * $radio;
	$img = imagecreate($ancho, $ancho);    
	$negro = imagecolorallocate($img, 0, 0, 0);
	$blanco = imagecolorallocate($img, 255, 255, 255);
	$rojo = imagecolorallocate($img, 255, 0, 0);
	imageellipse($img, $centrox, $centroy, $ancho, $ancho, $rojo);

	
	$are = 0;

	for($are; $are<$nea; $are++){
		
		imageline($img, $ap[$are]->x, $ap[$are]->y, $centrox, $centroy, $blanco); //centro

		imageline($img, $ap[$are]->x, $ap[$are]->y, $centrox, $centroy, $blanco);  //lado derecho
	
		imageline($img, $ap[$are]->x, $ap[$are]->y,$centrox, $centroy, $blanco); //union
	
		imageline($img, $ap[$are]->x, $ap[$are]->y, $centrox, $centroy, $blanco);  //lado derecho
	}
	$are2 = 0;

	for($are2; $are2<$nea-1; $are2++){
		imageline($img, $ap[$are2]->x, $ap[$are2]->y, $ap[$are2+1]->x, $ap[$are2+1]->y, $blanco); //unio

	}

	imageline($img, $ap[$nea-1]->x, $ap[$nea-1]->y, $ap[0]->x, $ap[0]->y, $blanco); //unio

	imagepng($img);
	imagedestroy($img);
?>