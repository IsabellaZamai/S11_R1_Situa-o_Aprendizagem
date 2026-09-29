<?php 
require_once __DIR__ . '/../includes/functions.php' ;
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/miniSistema/style/style.css">
    <title>Login Usuario</title>
</head>
<body>
    <?php include __DIR__ . '/../includes/header.php'?>
    <main>
        <h2>Faça login para continuar</h2>
        <form action=""method="post">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email"placeholder="Insira o e-mail"required><br><br>
            <label for="senha">senha</label>
            <input type="password" name="senha" id="senha"placeholder="Insira a senha"required><br><br>
            <input type="submit" value="enviar"><br>
        </form>
    <?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $usuarios = consultar_user($conexao,$_POST['email']);
        if($usuarios['email'] == $_POST['email']&& $usuarios['senha']==$_POST['senha']){
                $_SESSION['id'] = $usuarios['id'];
                echo "Usuário Logado!";
                header("Location: /miniSistema/index.php");
        } else {
            echo "Usuário ou senha Invalidos";
        }
    }
    ?>
    </main>
    <?php include __DIR__ . '/../includes/footer.php'?>
</body>
</html>