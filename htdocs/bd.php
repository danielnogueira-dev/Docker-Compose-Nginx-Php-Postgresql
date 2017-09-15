<?php

$host     = "postgresql"; // nome do container postgresql
$dbname   = "default";
$user     = "default";
$password = "secret";

$pdo = new PDO("pgsql:host={$host};dbname={$dbname}", $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM INNODB_METRICS limit 3;";
$consulta = $pdo->query($sql);
$linha = $consulta->fetch(PDO::FETCH_ASSOC);
echo "LOCALHOST TESTE BD POSTGRESQL<br><br>";
print_r($linha);

?>