<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();

echo '<h3>SEM SRP</h3>';
print_r($carrinho1->exibirItens());
echo 'Valor total: '.$carrinho1->exibirValorTotal();


// $carrinho1->adicionarItem('Bicicleta', 710.10);
// $carrinho1->adicionarItem('Geladeira', 1950.15);
// $carrinho1->adicionarItem('Tapete', 350.20);

echo '<br />';

print_r($carrinho1->exibirItens());
echo 'Valor total: '.$carrinho1->exibirValorTotal();

echo '<br />';
echo 'status: '.$carrinho1->exibirStatus();

$carrinho1->adicionarItem('Televisão 65"', 3570.25);

echo '<br />';
if($carrinho1->confirmarPedido()){
    echo 'Pedido confirmado com sucesso!';
}else{
    echo 'Erro ao confirmar pedido';
}

echo '<br />';
echo 'status: '.$carrinho1->exibirStatus();