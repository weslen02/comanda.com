<?php

use function PHPSTORM_META\type;

session_start();

require "banco.php";
// include "auxiliar.php";

$exibir_form = true;
$exibir_tabAdd = true;
$exibir_tabEdit = false;
$exibir_tabFin = false;

$comanda = array(
    'num_comanda' => 0,
    'data_registro' => '',
    'total' => 0
);

$comandaFin = array(
    'num_comanda' => 0,
    'data_registro' => '',
    'produto' => '',
    'quantidade' => 0,
    'preco_unitario'
);

/* if (array_key_exists('nome', $_GET) && $_GET['nome'] != '') {
    $tarefa = [];

    $tarefa['nome'] = $_GET['nome'];
    
    if(array_key_exists('descricao', $_GET)){
        $tarefa['descricao'] = $_GET['descricao'];
    }
    else {
        $tarefa['descricao'] = '';
    }

    if(array_key_exists('prazo', $_GET) && $_GET['prazo'] != ''){
        $tarefa['prazo'] = $_GET['prazo'];
    }
    else {
        $tarefa['prazo'] = '0001-01-01';
    } 

    $tarefa['prioridade'] = $_GET['prioridade'];

    if(array_key_exists('concluida', $_GET)){
        $tarefa['concluida'] = $_GET['concluida'];
    }
    else {
        $tarefa['concluida'] = 0;
    }    

    gravar_tarefa($conexao, $tarefa);
} */

$lista_comandas = buscar_comandas($conexao);
$lista_comFin = buscar_comFin($conexao);
include "template.php";


?>