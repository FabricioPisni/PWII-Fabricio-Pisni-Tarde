<?php
	$produtoUm = 200;
	$produtoDois = 100;

	$descontoUm = ($produtoUm/100) * 8 ;
	$descontoDois = ($produtoDois/100) *11 ;
	
	$valorFinal = ($produtoUm - $descontoUm) + ($produtoDois - $descontoDois);
	
	echo "O valor da sua compra foi de: R$", $valorFinal;
?>