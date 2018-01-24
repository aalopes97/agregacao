<?php
require('CartaoDeCredito.php');
require('Cliente.php');

/** CARTÃO **/
$cartao = new CartaoDeCredito();
$cartao->dataDeValidade = "03/10/2016";
$cartao->numero = "12354564";

/**Aluno**/
$cliente  = new Cliente();
$cliente->nome = "Antonio AUgusto LOpes";
$cartao->cliente = $cliente;

/**Exibe**/
echo "Cartão:".$cartao->numero."\n";
echo "Cliente:".$cartao->cliente->nome."\n";
