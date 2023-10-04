<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Lista de Cargos</title>
</head>
<body>
<h1>Lista de Cargos</h1>
<a href="../../../../3LM-informatica/app/views/cargos/criar.php" class="btn btn-success">Criar Novo Cargo</a>
<a href="../../../../3LM-informatica/app/views/funcionarios/criar.php" class="btn btn-secondary">Criar Novo Cargo</a>


<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($cargos as $cargo): ?>
        <tr>
            <td><?php echo $cargo['id']; ?></td>
            <td><?php echo $cargo['nome']; ?></td>
            <td><?php echo $cargo['descricao']; ?></td>
            <td>
                <a href="../../../../3LM-informatica/app/views/cargos/editar.php?id=<?php echo $cargo['id']; ?>" class="btn btn-primary">Editar</a>
                <a href="../../../../3LM-informatica/app/views/cargos/excluir.php?id=<?php echo $cargo['id']; ?>" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
