<div class="titulo">Desafio Precedência</div>

<?php

echo '<p>1. Qual será o valor impresso?</p>';
//echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3); // Divisão por Zero

// resolução ==> 8 - 8 = 0 // 2 // 15 + 2 = 17 // 17 + 2 = 19/0 ==> erro Divisão por zero 

echo '<p>2. Qual dos valores imprime o valor 100?</p>';
echo 'a) ', (1 + 2) * 20 - 15 , '<br>'; // ==> 60 - 15 = 45
echo 'b) ', 4 * 5 ** 2, '<br>'; // ==> 4 * 25 = 100 ==> resposta correta !!
echo 'c) ', 2 ** 3 ** 4 / 1e25, '<br>'; // errado
echo 'd) ', 3 + (3 * 8) / 2 - 3, '<br>'; //errado 

?>