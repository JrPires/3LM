<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Editar Funcionário</title>
</head>
<body>
<h1>Editar Funcionário</h1>
<a href="../../listaFuncionarios.php" class="btn btn-secondary">Voltar para a Lista</a>

<form action="../../../../3LM-informatica/app/processamento/ProcessarEditarFuncionario.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $funcionario['id']; ?>">

    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $funcionario['nome']; ?>" required>
    </div>
    <div class="form-group">
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?php echo $funcionario['sobrenome']; ?>" required>
    </div>
    <div class="form-group">
        <label for="idCargo">Cargo:</label>
        <select class="form-control" id="idCargo" name="idCargo" >
        </select>
    </div>
    <div class="form-group">
        <label for="dataNascimento">Data de Nascimento:</label>
        <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" value="<?php echo $funcionario['data_nascimento']; ?>" required>
    </div>
    <div class="form-group">
        <label for="salario">Salário:</label>
        <input type="number" class="form-control" id="salario" name="salario" value="<?php echo $funcionario['salario']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
</form>
</body>
</html>
