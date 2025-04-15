<?php
session_start();


require_once('twig_carregar.php');


require('inc/banco.php');


// Se já estiver logado, redireciona
if (isset($_SESSION['usuario'])) {
    header('Location: index.html');
    exit;
}


// Processamento do formulário
$erro = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';


    $stmt = $pdo->prepare('SELECT * FROM usuarios WHERE usuario = ?');
    $stmt->execute([$usuario]);
    $usuarioDB = $stmt->fetch(PDO::FETCH_ASSOC);


    if ($usuarioDB && password_verify($senha, $usuarioDB['senha'])) {
        $_SESSION['usuario'] = $usuarioDB['usuario'];
        header('Location: index.html');
        exit;
    } else {
        $erro = 'Usuário ou senha inválidos';
    }
}


// Renderiza o formulário de login com Twig
echo $twig->render('login.html', ['erro' => $erro]);