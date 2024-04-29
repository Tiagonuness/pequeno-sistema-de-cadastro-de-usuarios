<?php

try {

	// Faz a conexao com o Banco de dados
	$conectar = new PDO("mysql:host=localhost;port=3306;dbname=pdo;", "root", "");

} catch(PDOException $erro) {
	
	// Caso ocorra algum erro na conexãao com o banco de dados, exibe a mensagem:
	echo 'Falha ao conectar com o banco de dados: ' . $erro->getMessage();
	
}