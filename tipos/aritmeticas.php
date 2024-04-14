<div class="titulo">Operações Aritméticas</div>

<?php

echo 1+1, '<br>';
var_dump(1 + 1);
echo '<br>';

echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7/4, '<br>';
echo intdiv(7, 4), '<br>'; // tira a parte quebrada e tranforma o valor em inteiro 
echo round(7, 4), '<br>'; // arredonda o valor 
echo 7 % 4, '<br>';
echo 7 % 2, '<br>';
echo 8 % 2, '<br>';
echo 7 / 0.000000001, '<br>';
echo 4 ** 2, '<br>';

// Precedência de Operadores
// () => ** => / * % => + -

echo '<p>Precedência</p>';

echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2, '<br>';

?>