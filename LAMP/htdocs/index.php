<?php
try {
    $db = new PDO('mysql:host=mysql;dbname=mysql', 'root', '12345678');
    $msg = 'Connected To MySQL';
    print $msg;
} catch (PDOException $e) {
    $msg = 'Failed connect to MySQL('.$e->getMessage().')';
    print $msg;
}
?>