<?php
define("SERVIDOR","localhost");
define("USUARIO","root");
define("PASSWORD","");
define("DB","chatbot_db");

try {
    $pdo = new PDO("mysql:host=" . SERVIDOR . ";chatbot_db=" . DB . ";charset=utf8", USUARIO, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>