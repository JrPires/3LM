<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criar Funcionário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1>Criar Funcionário</h1>
<a href="../../listaFuncionarios.php" class="btn btn-secondary">Voltar para a Lista</a>

<form action="../../processamento/ProcessarCriarFuncionario.php" method="POST">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
    </div>
    <div class="form-group">
        <label for="cargo">Cargo:</label>
        <select class="form-control" id="cargo" name="cargo" required>
            <option value="" disabled selected>Selecione um cargo</option>
            <?php
            $conn = new mysqli("127.0.0.1", "root", "", "cadastro_funcionarios");
            $cargos = $conn->query("SELECT * FROM cargos;");
            ?>

            <?php foreach ($cargos as $cargo): ?>
                <option value="<?php echo $cargo['id']; ?>">
                    <?php echo $cargo['nome']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="dataNascimento">Data de Nascimento:</label>
        <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
    </div>
    <div class="form-group">
        <label for="salario">Salário:</label>
        <input type="number" class="form-control" id="salario" name="salario" required>
    </div>
    <button type="submit" class="btn btn-primary">Criar Funcionário</button>
</form>
</body>
</html>
