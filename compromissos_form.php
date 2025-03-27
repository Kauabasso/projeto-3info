<?php

require_once('twig_carregar.php');

echo $twig->render('compromissos_form.html', [
    'id' => $_GET['id'],
    'titulo' => $_GET['titulo'],
    'data' => $_GET['data']
]);