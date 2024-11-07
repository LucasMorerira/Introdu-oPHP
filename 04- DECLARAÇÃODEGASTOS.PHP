<?php

$energia=150.75;
$agua=80.50;
$internet=100.00;
$cartao=500.00;
$compras=300.00;
$boletos=200.00;

$total=$energia+$agua+$internet+$cartao+$compras+$boletos;


echo"***********************************<br>";
echo"            GASTOS MENSAIS         <br>";
echo"***********************************<br>";

echo"Energia:R$ $energia<br>";
echo"Água:R$ $agua<br>";
echo"Internet:R$ $internet<br>";
echo"Compras:R$ $compras<br>";
echo"Boleto:R$ $boletos<br>";

echo"***********************************<br>";
echo"Total de Gastos: R$ $total<br>";
echo"***********************************<br>";

?>