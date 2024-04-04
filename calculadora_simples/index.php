<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora</h1>
        <form action="resposta.php" method="post">
            <div class="form-group">
                <label for="numero1">Número 1:</label>
                <input type="number" class="form-control" id="numero1" name="numero1" required>
            </div>
            <div class="form-group">
                <label for="numero2">Número 2:</label>
                <input type="number" class="form-control" id="numero2" name="numero2" required>
            </div>
            <div class="form-group">
                <label for="operacao">Operação:</label>
                <select class="form-control" id="operacao" name="operacao">
                    <option value="soma">Soma</option>
                    <option value="subtracao">Subtração</option>
                    <option value="multiplicacao">Multiplicação</option>
                    <option value="divisao">Divisão</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
</body>
</html>