<div class="titulo">If Else</div>

<?php

if(true) {
    echo "Serei impresso?";
    echo "Serei impresso novamente?";
}

if(true){
    echo "Verdadeiro - Parte A";
    echo "Verdadeiro - Parte B";
} else {
    echo "Falso - Parte B";
    echo "Falso - Parte A";
}

if(true){

} else if( false){
    echo "Aqui";
}

if(false){
    echo "Passo A";
} else if(true){
    echo "Passo B"; 
} else {
    echo "Último Passo";
}

if(false){
    echo "Passo 1";
}else if(false){
    echo "Passo 2";
}else if(false){
    echo "Passo 3";
}else if(false){
    echo "Passo 4";
}else{
    echo "Passo 5";
}

echo "Fim";

