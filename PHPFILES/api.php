<?php
header("Content-Type: application/json");
include 'db.php';

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'),true);

switch($method) {
    case 'GET':
        handleGet($pdo);
        break;
    case 'POST':
        handlePost($pdo,$input);
        break;
    case 'PUT':
        handlePut($pdo,$input);
        break;
    case 'DELETE':
        handleDelete($pdo,$input);
        break;
    default:
        echo json_encode(['message'=>'invalid method']);
        break;
}

function handleGet($pdo) {
    $sql = "SELECT * FROM user";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
}

function handlePost($pdo,$input) {
    $sql = "INSERT INTO user(login,password) 
                VALUES(:login,:password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['login'=>$input['login'],
                    'password'=>$input['password']]);
    echo json_encode(['message'=>'user created']);
}

function handlePut($pdo,$input) {

}

function handleDelete($pdo,$input) {

}