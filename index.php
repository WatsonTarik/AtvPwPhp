<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post" action="cad.php">
        <h2>Cadastrar Funcionário</h2>
        <p> Identidade: <input type="number" name="id"> </p>
        <p> Nome: <input type="text" name="nome"> </p>
        <p> Cargo: <input type="text" name="cargo"> </p>
        <p> Salário: <input type="text" name="salario"> </p>
        <p> Dependente(es): <input type="number" name="depend"> </p>
        <button type="submit"> Salvar </button>
    </form>
</body>