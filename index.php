<?php 
    
    $categorias = [];
    $categorias[] = "infantil";
    $categorias[] = "adolescentes";
    $categorias[] = "adultos";
    $categorias[] = "idoso";
    //print_r($categorias);

    $nome = "Rafael";
    $idade = 32;

    //var_dump($nome);
    //var_dump($idade);

    if($idade >=6 && $idade <= 12){

        for($i = 0; $i < count($categorias); $i++){
            if($categorias[$i] == 'infantil')
                echo "O nadador, ",$nome, ", compete na categoria ".$categorias[$i];
        }

    }
    else if($idade >= 13 && $idade <= 18){

        for($i = 0; $i < count($categorias); $i++){
            if($categorias[$i] == 'adolescentes')
                echo "O nadador, ",$nome, ", compete na categoria ".$categorias[$i];
        }
    }
    else {

        for($i = 0; $i < count($categorias); $i++){
            if($categorias[$i] == 'adultos')
                echo "O nadador, ",$nome, ", compete na categoria ".$categorias[$i];
        }
    }
?>