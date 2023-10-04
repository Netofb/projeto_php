<?php
        foreach ($_SESSION['carrinho'] as $key => $value){
    //Nome do produto
    //Quantidade
    //preço
            echo'<div class="carrinho-item">';
    echo '<p class="valor">Produto: '.$value['nome'].'<br> Quantidade: '.$value['quantidade'].'<br> Preço: ' .($value['quantidade']*$value['preco']).',00<p>';
    echo '<hr>';
    echo '</div>';
};
?>