<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Funcionários</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1>Relatório de Funcionários</h1>
<a href="listar.php" class="btn btn-secondary">Voltar para a Lista</a>

<a href="GerarRelatorio.php" class="btn btn-success">Gerar Relatório em PDF</a>

<?php
$aniversariantes = verificarAniversariantesDoMes();

if (!empty($aniversariantes)) {
    echo '<h2>Aniversariantes do Mês:</h2>';
    echo '<ul>';
    foreach ($aniversariantes as $aniversariante) {
        echo '<li>' . $aniversariante['nome'] . ' ' . $aniversariante['sobrenome'] . '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>Não há aniversariantes este mês.</p>';
}
?>
</body>
</html>
