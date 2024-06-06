<!DOCTYPE html>
<html>
<head>
    <title>Tela para consulta</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Consulta</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //simulando os registros
                $registros = [
                    ['Rhayssa', '000000001', '000000004'],
                    ['Kauan', '000000002', '000000003'],
                    ['Manuella', '000000003', '000000000']
                ];

                foreach ($registros as $registro) {
                    echo '<tr>';
                    echo '<td>' . $registro[0] . '</td>';
                    echo '<td>' . $registro[1] . '</td>';
                    echo '<td>' . $registro[2] . '</td>';
                    echo '<td>';
                    echo '<button class="btn btn-primary">Editar</button>';
                    echo '<button class="btn btn-danger">Excluir</button>';
                    echo '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>