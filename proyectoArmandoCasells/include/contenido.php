<?php
/* Codigo creado por @rmand para el proyecto de entornos de desarrollo */

$juegosArray    = array("juego1.jpg","juego2.jpg","juego3.jpg","juego4.jpg");
$juegosNomArray = array("Abadia del crimen","Donkey Kong","Pang","Bubble Bobble");
$arrayGenero    = array("Plataformas","Aventuras","Rol","Shooter");	
$arrayColor    = array("Red","Blue","Aqua","White");

function contenido($juegosArray,$juegosNomArray,$arrayGenero,$arrayColor) {
	
	$html  = "<div class=\"contenido\">";
	$html .= "<div class=\"formulario\">";
	$html .= "<form method=\"post\" action=\"index.php\">";
	
	$html .= "<div class=\"articulo\">";
	$html .= "<h3>¿Como te llamas?</h3>";	
	$html .= "<hr>";	
	$html .= "Nombre y apellidos: <input type=\"text\" name=\"nombreapellidos\" placeholder=\"Nombre y apellidos\" required>";
	$html .= "</div>";
	
	$html .= "<div class=\"articulo\">";
	$html .= "<h3>¿Que juegos te gustan m&aacute;s?</h3>";	
	$html .= "<hr>";	
	
	for($contador=0;$contador<count($juegosArray);$contador++){
		$html .= "<div class=\"juegos\"><div class=\"imgJuego\"><img src=\"./images/$juegosArray[$contador]\" width=\"300px\"></div>";
		$html .= "<span class=\"nomjuego\"><input type=\"checkbox\" name=\"juego[]\" value=\"$contador\">$juegosNomArray[$contador]</span>";			
		$html .= "</div>";
	}
	$html .= "</div>";
	
	$html .= "<div class=\"articulo\">";	
	$html .= "<h3>¿Cuantas horas juegas al d&iacute;a?</h3>";	
	$html .= "<hr>";	
	$html .= "Horas de juego: <input type=\"number\" name=\"horas\" max=\"24\" value=\"0\" required>";
	$html .= "</div>";	
	
	$html .= "<div class=\"articulo\">";	
	$html .= "<h3>¿A que genero crees que pertencen los juegos?</h3>";	
	$html .= "<hr>";	
	$html .= "Genero: <select name=\"genero\">";
	for($cont=0;$cont<count($arrayGenero);$cont++){
		$html .= "<option value=\"$arrayGenero[$cont]\">$arrayGenero[$cont]</option>";
	}
	$html .= "</select>";
	$html .= "</div>";	
	
	$html .= "<div class=\"articulo\">";	
	$html .= "<h3>¿Que puntuaci&oacute;n le das al juego?</h3>";	
	$html .= "<hr>";	
	$html .= "Puntos del 1 al 5: <input type=\"number\" name=\"puntos\" value=\"1\" max=\"5\" required>";	
	$html .= "</div>";	
	
	$html .= "<div class=\"articulo\">";	
	$html .= "<h3>Dejanos tus comentarios:</h3>";	
	$html .= "<hr>";	
	$html .= "<textarea name=\"comentarios\"></textarea>";
	$html .= "</div>";	
	
	$html .= "<div class=\"articulo\">";
	$html .= "<h3>Elige un fondo para el resultado:</h3>";	
	$html .= "<hr>";	
	
	for($contador=0;$contador<3;$contador++){
		$html .= "<div class=\"juegos\"><div class=\"imgFondo$contador imgFondos\"></div>";
		$html .= "<span class=\"nomjuego\"><input type=\"radio\" name=\"fondo\" value=\"".$contador."\" required>Fondo ".($contador+1)."</span>";			
		$html .= "</div>";
	}
	$html .= "</div>";
	
	$html .= "<div class=\"articulo\">";
	$html .= "<h3>Elige el color de la letra de los titulares:</h3>";	
	$html .= "<hr>";	
	
	for($contador=0;$contador<count($arrayColor);$contador++){
		$html .= "<div class=\"juegos\">";
		$html .= "<span class=\"nomjuego colorLetraTit$contador\"><input type=\"radio\" name=\"colorletra\" value=\"".$contador."\" required>Color ".$arrayColor[$contador]."</span>";			
		$html .= "</div>";
	}
	$html .= "</div>";	
	
	$html .= "<div class=\"articulo\">";	
	$html .= "<hr>";	
	$html .= "<button type=\"submit\">Enviar cuestionario</button>";
	$html .= "</div>";	
	
	$html .= "<input type=\"hidden\" value=\"ok\" name=\"procesar\">";
	$html .= "</form>";	
	$html .= "</div>";
	$html .= "</div>";	
	
	return $html;
}

?>