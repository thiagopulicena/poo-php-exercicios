<?php

class Produto

{
public const NOME_PADRAO = "Sem nome";
    // self::$totalProdutos acessa um dado da classe, compartilhado por todos os objetos.
    // $this->nome acessa um dado do objeto atual.

    // Tentativa que causaria erro se fosse executada em um método static:
    // public static function testeEstatico()
    // {
    //     return $this->nome;
    // }
    // Erro esperado: Using $this when not in object context.

public static function testeEstatico()
{
    return self::$totalProdutos;
}
    public static $totalProdutos = 0;
    public static $totalProdutos = 0;
    public static $estoqueTotal = 0;
    private $nome;
    private $preco;
    private $quantidade; 

    public function __construct($nome, $quantidade = 1)
    {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        self::$totalProdutos++;
        self::$estoqueTotal += $quantidade;
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

    public static function criarPadrao()
{
    return new self(self::NOME_PADRAO, 0);
}
}

?>