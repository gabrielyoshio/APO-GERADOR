<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $education = $_POST['education'];
    $experience = $_POST['experience'];

    ob_start();
    include 'templates/template1.php';
    $output = ob_get_clean();

    file_put_contents('generated_cv.html', $output);
    header('Location: generated_cv.html');
    exit;
}
?>
