<?php

$loader = require __DIR__ . '/vendor/autoload.php';
use Projeto\entidades\Pedido;
use Projeto\Persistencia\UsuarioDAO;
use Projeto\entidades\Usuario;
use Projeto\entidades\Item;
use Projeto\Persistencia\PedidoDAO;
use Projeto\Persistencia\ItemDAO;


$user = new Usuario("YYYUt@gmail.com", "5546465", "Rua BULE");

$dao = new UsuarioDAO();
$dao->insert($user);

$time = new DateTime("now");
$pedido = new Pedido($time, $user, array());

$pedidoDao = new PedidoDAO();
$pedidoDao->insert($pedido);


echo "Usuario: "  . $user;
echo "<br>" ."<br>" . "Pedido: " . $pedido;
