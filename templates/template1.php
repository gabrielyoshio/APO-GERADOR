<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo de <?php echo $name; ?></title>
    <style>
        /* Estilos CSS */
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $name; ?></h1>
        <p>Email: <?php echo $email; ?></p>
        <p>Telefone: <?php echo $phone; ?></p>

        <div class="section">
            <h2>Educação</h2>
            <ul>
                <?php foreach ($education as $edu): ?>
                    <li><?php echo htmlspecialchars($edu); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="section">
            <h2>Experiência</h2>
            <ul>
                <?php foreach ($experience as $exp): ?>
                    <li><?php echo htmlspecialchars($exp); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>
</html>


