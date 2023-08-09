<?php
// Execute este comando com os dados do usuário abaixo para 
// gerar o hash do tipo Bcrypt, ou use https://bcrypt-generator.com/

$usuario = "Fulano"; // Digite o Nome de usuário
$senha = "Cilano@123"; // Digite a Senha

// Criar um hash seguro da senha usando Bcrypt
$hashSenha = password_hash($senha, PASSWORD_BCRYPT);

// Agora você tem o hash seguro da senha que pode ser armazenado no banco de dados ou onde necessário
echo "Hash da senha para o usuário '$usuario': $hashSenha";

?>

