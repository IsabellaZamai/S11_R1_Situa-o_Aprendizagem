<?php   require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/miniSistema/style/style.css">
    <title>Consulta Aluno</title>
</head>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    <h1>Pagina para Consulta</h1>
<form action=""method="post">
    <label for="id">ID:</label>
    <input type="number" name="id" id="id">
    <input type="submit" value="Enviar">
</form>
<body>

<?php 

if($_SERVER['REQUEST_METHOD']=="POST"){
    consultar_user($conexao,$_POST,['id']);
}

"<br>"
?>
<?php require_once __DIR__ . '/../includes/footer.php' ?>
</body>
</html>

