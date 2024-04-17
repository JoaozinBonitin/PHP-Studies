<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(1 <> 1);
var_dump(1 != 1);

var_dump(111 == '111');
var_dump(111 === '111');
var_dump(111 != '111');
var_dump(111 !== '111');

echo "<p>Relacionais no If/Else</p><hr>";
$idade = 15;
if($idade <18){
    echo "Menor de idade <br>";
} elseif($idade <= 65){
    echo "Adulto<br>";
} else {
    echo "Terceira idade!";
}

echo "<p>spaceship</p><hr>";
var_dump(5 <=> 3);
var_dump(3 <=> -1);
var_dump( 3 <=> 3);


echo "<p>valores pode ser V ou F</p><br>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");

?>

<style>
    p{
        margin-bottom: 0px;
    }

    hr{
        margin-top: 0px;
    }
</style>

