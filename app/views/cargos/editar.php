<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Cargo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1>Editar Cargo</h1>

<form action="../../../../3LM-informatica/app/processamento/ProcessarEditarCargo.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $cargo['id']; ?>">

    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $cargo['nome']; ?>" required>
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $cargo['descricao']; ?>" required>
    </div>

    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
</form>

</body>
</html>
