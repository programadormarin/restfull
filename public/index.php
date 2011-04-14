<?php
header('status:405');
$request = $_SERVER['REQUEST_METHOD'];
echo $request . '<br />';
switch ($request) {
	case 'GET':
		$id = $_SERVER['QUERY_STRING'];
		return $id;
	break;
	case 'POST':
		$id = $_POST['nome'];
		echo $id;
	break;
	case 'PUT':
		$id = file_get_contents("php://input");
		echo $id . '<br/>';
	break;
	case 'DELETE':
		$id = file_get_contents('php://input');
		echo $id;
	break;
	default:
		header('status:501');
	break;
}
//var_dump('<pre>', $_SERVER);
//var_dump('<pre>', $_SERVER);