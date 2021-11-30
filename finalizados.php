<?php

use function PHPSTORM_META\type;

session_start();

require "banco.php";

$exibir_form = false;
$exibir_tabAdd = false;
$exibir_tabEdit = false;
$exibir_tabFin = true;

$comandaFin = array(
    'num_comanda' => 0,
    'data_registro' => '',
    'produto' => '',
    'quantidade' => 0,
    'preco_unitario'
);

$lista_comFin = buscar_comFin($conexao);
include "template.php";


?>