<?php

class Produto
{
    public static $totalProdutos = 0;
    private $nome;
    private $preco;
    private $quantidade;

    public function __construct($nome, $quantidade = 1)
    {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        self::$totalProdutos++;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setPreco($preco)
    {
        if ($preco < 0) {
            echo "Erro: o preço não pode ser negativo.<br>";
            return;
        }

        $this->preco = $preco;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }
}

?>