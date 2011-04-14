<?php
require_once 'get_conexao.php';
use br\com\lcobucci\utils\conexao\ConexaoMysql;

$con = ConexaoMysql::getInstance();

$statement = $con->prepare("UPDATE FROM autor nome = ? WHERE id = ?");

$statement->bindValue(1, $_PUT['nome']);
$statement->bindValue(2, $_PUT['id']);
 
 try {
 	$statement->execute();
 	echo json_encode(array("status" => true));
 } catch (PDOException $e) {
 	echo json_encode(array("status" => false));
 }