<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Gerador de Currículo</h1>
        <form action="generate.php" method="POST" id="cv-form">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Telefone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="education">Educação:</label>
            <div id="education-fields">
                <input type="text" name="education[]" placeholder="Curso">
            </div>
            <button type="button" id="add-education">Adicionar Educação</button>

            <label for="experience">Experiência:</label>
            <div id="experience-fields">
                <input type="text" name="experience[]" placeholder="Experiência Profissional">
            </div>
            <button type="button" id="add-experience">Adicionar Experiência</button>

            <button type="submit">Gerar Currículo</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>
</html>

