<?php

require_once('twig_carregar.php');
require('inc/banco.php');

//Busca as compras no Banco
$dados = $pdo->query('SELECT * FROM usuarios');

$user = $dados->fetchAll(PDO::FETCH_ASSOC);


echo $twig->render('login.html', [
    'titulo' => 'Usuarios',
    'usuarios' => $user, //no html ela vai se chamar compras, aqui ela se chama comp
]);