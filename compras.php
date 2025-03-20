<?php

require_once('twig_carregar.php');
require('inc/banco.php');

//Busca as compras no Banco
$dados = $pdo->query('SELECT * FROM compras');

$comp = $dados->fetchAll(PDO::FETCH_ASSOC);


echo $twig->render('compras.html', [
    'titulo' => 'Compras',
    'compras' => $comp, //no html ela vai se chamar compras, aqui ela se chama comp
]);

//opa