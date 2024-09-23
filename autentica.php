<?php 
include("conn.php");
session_start();


if(isset($_POST['usuario']) && isset($_POST['senha'])){
    $login = $_POST['usuario'];
    $senha = $_POST['senha'];

    try {
        $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user , $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $err) {
        echo "ERRO: Conexão com banco de dados não realizada. Erro gerado: " . $err->getMessage();
        exit;
    }

    # Prevenir SQL injection
    $login = $conn->quote($login);
    $senha = $conn->quote($senha);
  
    # Consultar o banco de dados
    $query = "SELECT id FROM tblusuarios WHERE usuario=$login AND senha=$senha";

try {
        $result = $conn->query($query);

    } catch (PDOException $err) {
        echo "Erro na consulta: " . $err->getMessage();
        exit;
    }

    //verifica se o resultado da query é igual a 1 depois de validar a autenticação, se sim -> LOGADO!
    if ($result->rowCount() == 1) {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $_SESSION['id'] = $row['id'];

        header('location:play.php');
        exit;
    } else {
        echo 'Não foi possível fazer login.';
        header("location:index.php?msg=erro_login");
    }    
    
    $conn = null; // Fechar a conexão
} else {
    echo 'Forma de acesso inválidada pelo administrador';
    header("location:index.php?msg=erro_dados");
}
?>