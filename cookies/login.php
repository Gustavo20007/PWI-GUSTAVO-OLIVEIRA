<?php
//obtem os valores digitados
$email=$_POST["email"];
$senha=$_POST["senha"];
include "conecta_mysql.inc";

//escapar de ataques de carcteres especiais , para o SQL Injection
$email=$conexao->real_escape_string($email);
$senha=$conexao->real_escape_string($senha);

//acesso ao banco de dados
$resultado= $conexao->query("SELECT * FROM usuarios WHERE email='email'");
$linhas= $resultado->num_rows;

if ($linhas==0)
{
     //testando a comunicação da consulta de retorno de algum registro 
     echo "<html><body>";
     echo "<p aglin=\"center"> "Email não encontrado!!!!!!!!!!!!!!<p/>";
     echo "<p aglin=\"center\><a href=\"login.html\"\>Voltar</a></p>";
     echo "</body></html>";
}
else{
    $dados= $resultado->fetch_array();
    $senha_bd=$dados["senha"];
    if($senha!=$senha_bd)
    {
        //confere senha
    echo "<html><body>";
     echo "<p aglin=\"center"> "Senha incorreta <p/>";
     echo "<p aglin=\"center\><a href=\"login.html\"\>Voltar</a></p>";
     echo "</body></html>";
    }

    else
        { // usuário e senha corretos.Vamos criar os cookies

            setcookie("email_usuario", $email);
            setcookie("senha_usuario",$senha);

          // direciona para a pagina inicial dos usuários cadastrados
          header("Location: pagina_inicial.php");

        }
}

$conexao->close();
?>