<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto-PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="title">Carrinho</h1>
      <div class="carrinho-container">

     

<?php
    $items = array(['nome'=>'Mouse','imagem'=>'mouse.png','preco'=>'200'],
    ['nome'=>'Notebook','imagem'=>'note.png','preco'=>'400'],
    ['nome'=>'Fone','imagem'=>'fone.png','preco'=>'100']);
    
foreach($items as $key => $value){
?>
        <div class="produto">
       
        <img src="<?php echo $value['imagem']?>">
        <a href="?adicionar=<?php echo $key?>">Adicionar ao carrinho!</a>
        
</div> <!--produto-->
<?php
}
?>
 </div><!-- Carrinhho container -->   

<?php
if(isset($_GET['adicionar'])){
    //VAMOS ADICIONAR AO CARRINHO.
    $idProduto = (int) $_GET['adicionar'];
    if(isset($items[$idProduto])){
        if(isset($_SESSION['carrinho'][$idProduto])){
            $_SESSION['carrinho'][$idProduto]['quantidade']++;
        }else{
            $_SESSION['carrinho'][$idProduto] = array('quantidade'=>1,'nome'=>$items[$idProduto]['nome'],'preco'=>$items[$idProduto]['preco']);
        }
        echo '<script>alert("O item foi adicionado ao carrinho.")</script>';
    }else{
        die('Você não pode adicionar um item que não existe.');
    };
};

?>
<h2 class="title">Carrinho</h2>
<?php include('carinho.php');
?>




</body>
</html>











