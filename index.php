<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>

<div class="container">
    <h2>Promoções do Dia</h2>
    <div class="row mt-5">

    <?php 

 for ($i=7; $i < 10; $i++) {
 ?>
 <div class="card" style="width: 18rem; padding: 2rem;">
   <img class="card-img-top" style='height: 250px;'src="./content/<?php echo $produtos[$i]['imagem'];?>" alt="Card image cap">
    <div class="card-body">
     <h5 class="card-title"><?php echo $produtos[$i]['nome']; ?></h5>
     <p class="card-text"><?php echo $produtos[$i]['autor']; ?></p>
     <p class="card-text"><?php echo $produtos[$i]['preço']; ?></p>
     <a href="produto-detalhe.php?id=<?php echo $i;?>&tipo=promocao" class="btn btn-primary">Comprar</a>
    </div> 
 </div> 
<?php
}
?>

    </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>