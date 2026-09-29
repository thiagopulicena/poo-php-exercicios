<?php

require_once "Produto.php";


$produto1 = new Produto("Teclado Mecânico");


$produto2 = new Produto("Mouse Gamer", 5);

$produto3 = new Produto("Monitor", 2);

$produto1->setPreco(250);
$produto2->setPreco(150);

echo "<h3>Produto 1</h3>";

echo "Nome: " . $produto1->getNome() . "<br>";
echo "Preço: R$ " . $produto1->getPreco() . "<br>";
echo "Quantidade: " . $produto1->getQuantidade();

echo "<h3>Produto 2</h3>";

echo "Nome: " . $produto2->getNome() . "<br>";
echo "Preço: R$ " . $produto2->getPreco() . "<br>";
echo "Quantidade: " . $produto2->getQuantidade();

echo "<br>Total de produtos criados: " . Produto::$totalProdutos;
echo "<br>Estoque total: " . Produto::$estoqueTotal;

?>