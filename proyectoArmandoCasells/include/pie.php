<?php

function pie ($autor,$nomproyecto){
	
	$html  = "<div class=\"piepagina\">";
	$html .= "<p>&copy; ".$autor." ".date("Y") ."</p><p>".$nomproyecto."</p>";
	$html .= "</div>";
	
	return $html;
}

?>