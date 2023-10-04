<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Excluir Cargo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1>Excluir Cargo</h1>
<p>Você tem certeza de que deseja excluir este cargo?</p>
<form action="../../../../3LM-informatica/app/processamento/ProcessarExcluirCargo.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <button type="submit" class="btn btn-danger">Excluir</button>
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
</form>
</body>
</html>
