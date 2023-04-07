<?php
    $servername = "localhost"; // endereço do servidor
    $username = "root"; // nome de usuário do banco de dados
    $password = ""; // senha do banco de dados
    $dbname = "php"; // nome do banco de dados
    
    // Cria conexão
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verifica conexão
    if ($conn->connect_error) {
    die("Falha na conexão: " . mysqli_connect_error());
    }
?>