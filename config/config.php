<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=ezpass;charset=utf8", "root", "");
} catch ( PDOException $e ){
    print $e->getMessage();
}
?>