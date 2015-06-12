<?php 

function reverse($cadena,$encuentra=''){
	$revez = '';
	$contEncuentra = 0;
	for($cont = strlen($cadena)-1;$cont>=0;$cont--){
		if($cadena[$cont]==$encuentra){
			$contEncuentra++;
		}
		$revez.=$cadena[$cont];
	}
	if($contEncuentra && strlen($encuentra)>0){
		return $revez ." frecuencia de $encuentra: $contEncuentra ". ($contEncuentra>0?"veces":"vez");
	}else{
		return $revez;
	}
}
echo reverse("rockea","e");
