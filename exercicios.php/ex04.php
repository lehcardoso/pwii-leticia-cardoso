<?php
$valorProduto = 1000;

$valorComAcrescimo = $valorProduto * 1.16;
$parcela = $valorComAcrescimo / 10;

echo "Valor total com acrescimo de 16%: R$  " . number_format($valorComAcrescimo, 2, ',', '.') . "\n" 