<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Excluir Funcionário</title>
</head>
<body>
<h1>Excluir Funcionário</h1>
<p>Tem certeza de que deseja excluir este funcionário?</p>
<form method="post" action="../../../app/processamento/ProcessarExcluirFuncionario.php">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="submit" value="Confirmar Exclusão">
    <a href="../../listaFuncionarios.php">Cancelar</a>
</form>
</body>
</html>
