<?php
header('content-type: application/json');

if($server['REQUEST_METHOD'] === 'post'){
    $numero1 = $_ POST['numero1'];
    $numero2 = $_ POST['numero2'];

    $soma = $numero1 + $numero2;

    echo json_encode(['soma' => $soma]);
} else{
    echo json_encode(['erro' => 'Método não suportado. use o POST']);

}   
?>