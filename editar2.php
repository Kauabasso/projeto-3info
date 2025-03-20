<?php

require('inc/banco.php');

$item = $_POST['item'] ?? null;

if($item){
    //prepara a consulta
  $query = $pdo->prepare('UPDATE compras SET item = :it WHERE id != :it');
  
  //associa os valores dentro da consulta
  $query->bindValue(':it', $item);

  //executa a consulta
  $query->execute();
}
header('location:compras.php');
