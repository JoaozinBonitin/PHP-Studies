<div class="titulo">Variaveis Variaveis</div>

<?php

$a = 'valorA';
$$a = 'valorAA';

$valorA = 'valorAA';
echo "$a {$$a} ${$a} $valorA";

echo '<br>';
$epa = "opa";
$opa = "vish";

echo "$epa {$epa}"

?>