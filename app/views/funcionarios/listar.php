<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Funcionários</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1>Lista de Funcionários</h1>
<a href="../../../../3LM-informatica/app/views/funcionarios/criar.php" class="btn btn-primary">Criar Funcionário</a>
<a href="../../../../3LM-informatica/app/views/cargos/criar.php" class="btn btn-secondary">Criar Cargo</a>

<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Cargo</th>
        <th>Data de Nascimento</th>
        <th>Salário</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    <!-- Loop para exibir a lista de funcionários -->
    <?php foreach ($funcionarios as $funcionario): ?>
        <tr>
            <td><?php echo $funcionario['id']; ?></td>
            <td><?php echo $funcionario['nome']; ?></td>
            <td><?php echo $funcionario['sobrenome']; ?></td>
            <td><?php echo $funcionario['cargo']; ?></td>
            <td><?php echo $funcionario['data_nascimento']; ?></td>
            <td><?php echo $funcionario['salario']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $funcionario['id']; ?>" class="btn btn-warning">Editar</a>
                <a href="../../../../3LM-informatica/app/views/funcionarios/excluir.php?id=<?php echo $funcionario['id']; ?>" class="btn btn-danger">Excluir</a>
                <a href="visualizar.php?id=<?php echo $funcionario['id']; ?>" class="btn btn-info">Visualizar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
