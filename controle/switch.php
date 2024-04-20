<div class="titulo">Switch</div>

<?php
$categoria = 'Luxo';
$preco = 0.0;
$carro = '';

if($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 25000;
} else if($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} else if($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: " . $carro . "<br> Preço: R$ " . $precoFormatado . "</p>";

$categoria = '????';

switch(strtolower($categoria)){
    case 'luxo': 
        $carro = 'mercedes';
        $preco = 250000;
        break;
    case 'SUV':
        $carro = 'renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'etios';
        $preco = 55000;
        break;
    default:
        $carro = 'mobi';
        $preco = 33000;
        break;            
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: " . $carro . "<br> Preço: R$ " . $precoFormatado . "</p>";