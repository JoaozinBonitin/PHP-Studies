<div class="titulo">Desafio Operadores Logicos</div>
<!--
    Dois trabalhos -> terça e quinta!
    - Se os dois forem execitados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum  for executado ->  Fica em casa mais saudavel!
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select{
        font-size: 1.8rem;
    }
</style>

<?php


    if($_POST['t1'] && $_POST['t2'] == 1){
        echo "<p>TV 50' e Sorvete</p>";
    } elseif($_POST['t1'] || $_POST['t2'] == 1){
        echo "<p>TV 32' e Sorvete</p>";
    } else{
        echo "<p>Fica em casa mais saudavel!</p>";
    }


