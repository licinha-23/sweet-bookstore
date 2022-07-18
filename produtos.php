<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>

    <h2 style="color: #804d1b; padding: 1rem; text-align: center; font-family: Times New Roman, Times, Serif;"">Produtos</h2>

    <aside style="background-color: #dcc3a8; width: 20rem; height: 150rem; float: left; margin: 1rem; margin-top: 3rem;">
    
    <form action="./_dados.php" method="get">
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="TxtRomance">
  <label class="form-check-label" for="TxtRomance">Romance</label>
</div>
</form>

</aside>

    <div class="container">
    <div class="row mt-5">

    
<?php 
foreach ($produtos as $key => $value) {
?>


    
    <div class="card m-3" style="width: 18rem; padding: 2rem; margin: 2rem; background-color: #dcc3a8;  color: #804d1b;">
    <img src="./content/<?php echo $value['imagem']; ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"><?php echo $value['nome']; ?></h5>
    <p class="card-text"><?php echo $value['autor']; ?></p>
    <a style="background-color: #804d1b; border: none;" href="produto-detalhe.php?id=<?php echo $key;?>&tipo=promocao" class="btn btn-primary">Comprar</a>
    </div>
    </div>

<?php
}
?>

    </div>
</div>

<?php
include_once './includes/_footer.php';
?>