<?php
if (!isset($_GET['nome_receita'])){
header("Location: inicio.php");
exit;
}

$nome = "%".trim($_GET['nome_receita'])."%";

$dbh = new PDO('mysql:host=localhost; dbname=uninove', 'c##naf', '123456');
$sth = $dnh->prepare('SELECT * FROM 'receitas' WHERE 'nome' LIKE FRANGO');
$sth->bindParam(':nome', $nome, PDO::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
print_r($resultados); exit;
?>