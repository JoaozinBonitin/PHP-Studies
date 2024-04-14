<div class="titulo">Desafio String</div>

<?php

//Enunciado: Avaliando os métodos da documentação string, !AbcaBcabc1, faça com que essa string retorne 1 ao encontrar com abc

// resposta

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';

echo strpos(strtolower('!AbcaBcabc'), 'abc') . '<br>';

?>