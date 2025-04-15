<?php

require_once('twig_carregar.php');

echo $twig->render('login_form.html', [
    'id' => $_GET['id'],
    'usuario' => $_GET['usuario'],
    'senha' => $_GET['senha']
]);