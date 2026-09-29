<?php

class FormatadorProduto
{
    public static function formatarPreco($valor)
    {
        return "R$ " . number_format($valor, 2, ",", ".");
    }
}