<?php

    include('pizza.php'); 
    
    $pizza1 = new Pizza();
    $pizza1 -> setNome("Pizza de portuguesa");
    $pizza1 -> setPreco(30);
    $pizza1 -> setSabor("Queijo, Palmito, Ovo e Ervilha");
    $pizza1 -> setTamanho("Grande");
    echo $pizza1 -> getNome();
    echo $pizza1 -> getPreco();
    echo $pizza1 -> getSabor();
    echo $pizza1 -> getTamanho(). "<br>";
    
    $pizza2 = new Pizza();
    $pizza2 -> setNome("Pizza de Calabresa ");
    $pizza2 -> setPreco(20);
    $pizza2 -> setSabor("Calabresa e Cebola");
    $pizza2 -> setTamanho("Pequena");
    echo $pizza2 -> getNome();
    echo $pizza2 -> getPreco();
    echo $pizza2 -> getSabor();
    echo $pizza2 -> getTamanho(). "<br>";
    
    $pizza3 = new Pizza();
    $pizza3 -> setNome("Pizza de catupiry");
    $pizza3 -> setPreco(20);
    $pizza3 -> setSabor("Frango, Queijo e Requeijão");
    $pizza3 -> setTamanho("Média");
    echo $pizza3 -> getNome();
    echo $pizza3 -> getPreco();
    echo $pizza3 -> getSabor();
    echo $pizza3 -> getTamanho(). "<br>";


    $pizza4 = new Pizza();
    $pizza4 -> setNome("Pizza de Bricadeiro ");
    $pizza4 -> setPreco(40);
    $pizza4 -> setSabor("Bricadeiro e Granulado");
    $pizza4 -> setTamanho("Grande");
    echo $pizza4 -> getNome();
    echo $pizza4 -> getPreco();
    echo $pizza4 -> getSabor();
    echo $pizza4 -> getTamanho(). "<br>";

?>