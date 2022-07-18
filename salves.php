<?php
    if (isset($_GET['genero'])) {
        $carros = array_filter($produtos, function($produto) {
            return $produto['genero'] === $_GET['genero'];
        });
    }
    
    if (isset($_GET['autor'])) {
        $produtos = array_filter($produtos, function($produto) {
            return $produto['autor'] === $_GET['autor'];
        });
    }
    
    if (isset($_GET['tipo'])) {
        $produtos = array_filter($produtos, function($produto) {
            return $produto['tipo'] >= $_GET['tipo'];
        });
    }
    $generos = array_unique(array_map(function($produto) { 
        return $produto['genero']; 
    }, $produto));
    ?>