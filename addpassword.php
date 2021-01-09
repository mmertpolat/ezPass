<?php
include("config/config.php");
include("inc/functions.php");

$platform = strtolower($_POST['platform']);
$user = encrypt_decrypt('encrypt',$_POST['user']);
$password = encrypt_decrypt('encrypt',$_POST['password']);

// check same credentials exist in database

$passcheck = $db->query("SELECT platform, user, password FROM credentials WHERE platform = '$platform' AND user = '$user' AND password = '$password'")->fetchAll();
$say = count($passcheck);

if($say >= 1){
    echo json_encode(array("statusCode" => 2));
    exit;
}

// check same credentials exist in database

    $query = $db->prepare("INSERT INTO credentials SET
platform = ?,
user = ?,
password = ?");
    $insert = $query->execute(array(
        $platform, $user, $password
    ));
    if ($insert) {
        $last_id = $db->lastInsertId();
        echo json_encode(array("statusCode" => 1));
}

?>