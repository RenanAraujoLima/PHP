<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

//print_r($categorias);

$nome = 'João';
$idade = 8;

//var_dump($nome);
//var_dump($idade);

if ($idade >= 6 && $idade <= 12)
{ 
    echo "O nadador " .$nome. " compete na categoria infantil";
}

else if ($idade >= 13 && $idade <= 18)
{
    echo "O nadador " . $nome. " compete na categoria adolescente";
}

else
{  
    if ($categorias[$i] == 'adulto')
    echo "O nadador " .$nome. " compete na categoria adulto";    
}

?>











