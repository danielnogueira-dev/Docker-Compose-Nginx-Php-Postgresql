<?php

$host     = "postgresql"; // nome do container postgresql
$dbname   = "teste";
$user     = "default";
$password = "secret";

$pdo = new PDO("pgsql:host={$host};dbname={$dbname}", $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM pessoa;";
$consulta = $pdo->query($sql);
$linha = $consulta->fetchAll(PDO::FETCH_ASSOC);
echo "api.dev TESTE BD POSTGRESQL<br><br>";
print_r($linha);

?>