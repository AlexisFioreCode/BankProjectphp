<?php 

try {
    $db = new PDO('mysql:host=localhost;dbname=banque_php2', 'root', '');
} catch (\Exception $e) {
    echo $e->getMessage();
    exit;
}

?>