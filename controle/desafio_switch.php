<div class="titulo">Desafio switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="km-metro">Km > Metro</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

if(isset($_POST['param']) && isset($_POST['conversao'])){
    $typeConversion = $_POST['conversao']; 
    $value = $_POST['param'];
    $milha = 1.6;
    $metro = 1000;
    switch ($typeConversion) {
        case 'km-milha':
            $conversion = $value / $milha . " milhas";
            break;
        case 'milha-km':
            $conversion = $value * $milha;
            break;
        case 'metro-km':
            $conversion = $value / $metro;
            break; 
        case 'km-metro':
            $conversion = $value * $metro;
            break;              
        default:
            # code...
            break;
    }

    echo "o Valor " . $value . " na conversão >> " . $typeConversion ." <<" ." é: " . $conversion;
}
