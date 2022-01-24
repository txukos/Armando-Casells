<?php
/* Codigo creado por @rmand para el proyecto de entornos de desarrollo */

function resultado($juegosArray,$juegosNomArray,$arrayGenero,$arrayColor,$datos) {
	
	$arrayDescripcion = array(
		"Plataformas"=>"Los videojuegos de plataformas, o simplemente plataformas, son un género de videojuegos que se caracterizan por tener que caminar, correr, saltar o escalar sobre una serie de plataformas y acantilados, con enemigos, mientras se recogen objetos para poder completar el juego.",
		"Aventuras"=>"Los videojuegos de aventura son un género de videojuegos, caracterizados por la investigación, exploración, la solución de rompecabezas, la interacción con personajes del videojuego, y un enfoque en el relato en vez de desafíos basados en reflejos.",
		"Rol"=>"Un juego de rol o JDR es un juego en el que uno o más jugadores desempeñan un determinado rol, papel o personalidad. Cuando una persona hace el papel de X significa que está interpretando el papel de un personaje jugador.",
		"Shooter"=>"Los videojuegos de disparos, tiros o shooters' conforman un género que engloba un amplio número de subgéneros que tienen la característica común de permitir controlar un personaje que, por norma general, dispone de un arma que puede ser disparada a voluntad. Pertenecen al género de acción."
		);
	
	$html  = "<div class=\"contenido\">";
	$html .= "<div class=\"articulo\">";
	$html .= "<h3 class=\"colorLetraTit".$datos["colorletra"]."\">Hoy estamos a ".date("d-m-Y")."</h3>";	
	$html .= "<hr>";	
	$html .= "</div>";
	
	$html .= "<div class=\"articulo\">";
	$html .= "<h3 class=\"colorLetraTit".$datos["colorletra"]."\">¡Hola! ".$datos['nombreapellidos']."</h3>";	
	$html .= "<hr>";	
	$html .= "</div>";
	
	$html .= "<div class=\"articulo\">";
	$html .= "<h3 class=\"colorLetraTit".$datos["colorletra"]."\">El resultado de tu encuesta es:</h3>";	
	$html .= "<br/><br/>";	
	$html .= "</div>";
	
	$html .= "<div class=\"articulo\">";
	$html .= "<h3 class=\"colorLetraTit".$datos["colorletra"]."\">Tus juegos favoritos son:</h3>";	
	$html .= "<hr>";	
	for($contador=0;$contador<count($datos["juego"]);$contador++){
		$html .= "<div class=\"juegos\"><div class=\"imgJuego\"><img src=\"./images/".$juegosArray[$datos["juego"][$contador]]."\" width=\"300px\"></div>";
		$html .= "<span class=\"nomjuego\">".$juegosNomArray[$datos["juego"][$contador]]."</span>";			
		$html .= "</div>";
	}
	$html .= "</div>";	
	
	$html .= "<div class=\"articulo\">";	
	$html .= "<h3 class=\"colorLetraTit".$datos["colorletra"]."\">Juegas ...</h3>";	
	$html .= "<hr><br/>";	
	$html .= "<span class=\"nomjuego horas\">".$datos["horas"]."</span><br><h3 class=\"colorLetraTit".$datos["colorletra"]."\">Horas al d&iacute;a</h3><br>";
	$html .= "<p>";
	if($datos["horas"]<2){
		$html .= "Tus horas de juego a videojuetos diario son aceptables.";
	}else{
		if($datos["horas"]<=5){
			$html .= "Juegas demasiadas horas a los videojuegos";
		}else{
			$html .= "No tienes vida social, eres un FRIKI de los videojuetos. ¡Solucionalo!";
		}
	}
	$html .= "</p>";
	$html .= "</div>";	
	
	$html .= "<div class=\"articulo\">";	
	$html .= "<h3 class=\"colorLetraTit".$datos["colorletra"]."\">¿A que genero crees que pertencen los juegos?</h3>";	
	$html .= "<hr><br/>";	
	$html .= "Has repondido: <h3 class=\"colorLetraTit".$datos["colorletra"]."\">".$datos["genero"] . "</h3><br/>";
	$html .= "<p>";	
	$html .= "<span class=\"nomjuego descripcion\">".$arrayDescripcion[$datos["genero"]]."</span>";
	for($contador=0;$contador<count($datos["juego"]);$contador++){
		if($datos["genero"] == "Plataformas" && ($juegosNomArray[$datos["juego"][$contador]] == "Donkey Kong" || $juegosNomArray[$datos["juego"][$contador]] == "Bubble Bobble")){
			$genero = "Los juegos Donkey Kong y Bubble bobble son del genero Plataformas.";
		}else{
			if($datos["genero"] == "Aventuras" && $juegosNomArray[$datos["juego"][$contador]] == "Abadia del crimen"){
				$genero = "El juego Abadia del crimen es del genero Aventuras";
			}else{
				if($datos["genero"] == "Shooter" && $juegosNomArray[$datos["juego"][$contador]] == "Pang"){
					$genero = "El Pang es del genero Shooter.";
				}else{
					if($datos["genero"] == "Rol" && $juegosNomArray[$datos["juego"][$contador]] == "Pang" || $juegosNomArray[$datos["juego"][$contador]] == "Abadia del crimen" || $juegosNomArray[$datos["juego"][$contador]] == "Donkey Kong" || $juegosNomArray[$datos["juego"][$contador]] == "Bubble Bobble"){
						$genero = "Entre estos juegos no existen del genero ROL.";
					}			
				}
			}
		}
	}
	$html .= "<h2>".$genero."</h2>";
	$html .= "</p>";	
	$html .= "<br/>";	
	$html .= "</div>";	
	
	$html .= "<div class=\"articulo\">";	
	$html .= "<h3 class=\"colorLetraTit".$datos["colorletra"]."\">Puntuaci&oacute;n que le das a los juegos</h3>";	
	$html .= "<hr><br>";	
	$html .= "<p>";
	for($cont=0;$cont<$datos["puntos"];$cont++){
		$html .= "<img src=\"./images/ico.png\" width=\"100px\" class=\"puntuacion\">";
	}
	$html .= "</p>";	
	$html .= "<br/>";	
	$html .= "</div>";		
	
	$html .= "<div class=\"articulo\">";	
	$html .= "<h3 class=\"colorLetraTit".$datos["colorletra"]."\">Tus comentarios han sido ..</h3>";	
	$html .= "<hr>";
	$html .= "<p>";	
	$palabrasArray = explode(" ",$datos["comentarios"]);
	$palabras = 0;
	for($contador=0;$contador<count($palabrasArray);$contador++){
		if(strtolower($palabrasArray[$contador]) == strtolower("php")){
			$html .= "<span class=\"palabras\">[<span style=\"color:red;\">".$palabrasArray[$contador]."</span>]</span>";
		}else{
			if($palabrasArray[$contador] != ""){
				$html .= "<span class=\"palabras\">[".$palabrasArray[$contador]."]</span>";
			}
		}
		if($palabrasArray[$contador] != ""){
			$palabras++;
		}
	}
	$html .= "<br/><br/>";
	$html .= "Has utilizado <span class=\"nomjuego colorLetraTit".$datos["colorletra"]."\">".$palabras." palabras</span>";	
	$html .= "</p>";	
	$html .= "</div>";		
	
	$html .= "</div>";
	
	return $html;
}

?>