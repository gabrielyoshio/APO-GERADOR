<?php
// Função para sanitizar dados de entrada
function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

// Função para gerar o currículo em HTML (pode ser estendida ou modificada conforme necessário)
function generateCV($name, $email, $phone, $education, $experience) {
    ob_start();
    include 'templates/template1.php';
    return ob_get_clean();
}
?>
