<?php
require_once 'get_conexao.php';
use br\com\lcobucci\utils\conexao\ConexaoMysql;

$con = ConexaoMysql::getInstance();

$dados = array();

foreach ($con->query("SELECT * FROM autor ORDER BY `id`", PDO::FETCH_OBJ) as $obj) {
	$dados[] = $obj;
}

$conteudo = json_encode($dados);

if (isset($_REQUEST['callback'])) {
	$conteudo = $_REQUEST['callback'] . '(' . $conteudo . ')';
} 