<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criar Cargo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1>Criar Cargo</h1>
<a href="index.php" class="btn btn-secondary">Voltar para a Lista de Cargos</a>

<form action="../../processamento/ProcessarCriarCargo.php" method="POST">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input type="text" class="form-control" id="descricao" name="descricao" required>
    </div>
    <button type="submit" class="btn btn-primary">Criar Cargo</button>
</form>
</body>
</html>
