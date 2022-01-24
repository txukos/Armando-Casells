<?php

function cabecera ($logo, $titulo){
	
	$html  = "<div class=\"cabecera\">";
	$html .= "<div class=\"logo cabeceracontenido\"><a href=\"./index.php\"><img src=\"./images/$logo\" width=\"100px\" heght=\"100px\"></a></div>";
    $html .= "<div class=\"titulo cabeceracontenido\">$titulo</div>";
	$html .= "</div>";
	
	return $html;
}