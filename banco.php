<?php

$bdServidor = '192.168.64.2';
$bdUsuario = 'usComanda';
$bdSenha = 'sistemadecomandas';
$bdBanco = 'comandas';
$bdPorta = '3306';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco, $bdPorta);

if (!$conexao) {
    echo "Problemas para conectar no banco. Erro: ";
    echo mysqli_connect_error();
    die();
}

function buscar_comandas($conexao) {
    $sqlBusca = 
        'SELECT DISTINCT num_comanda,
        data_registro, 
        SUM(preco_unitario * quantidade) AS "total"
        FROM comandas
        WHERE status_comanda = 1
        GROUP BY num_comanda';
    $resultado = mysqli_query($conexao, $sqlBusca);
    $comandas = [];
    while ($comanda = mysqli_fetch_assoc($resultado)) {
        $comandas[] = $comanda;
    }
    return $comandas;
}

function buscar_comFin($conexao) {
    $sqlBusca = 'SELECT * FROM comandas WHERE data_registro = CURDATE()';
    $resultado = mysqli_query($conexao, $sqlBusca);
    $comandas = [];
    while ($comanda = mysqli_fetch_assoc($resultado)) {
        $comandas[] = $comanda;
    }
    return $comandas;
}

?>