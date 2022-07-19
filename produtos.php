<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>

    <h2 style="color: #804d1b; padding: 1rem; text-align: center; font-family: Times New Roman, Times, Serif;">Produtos</h2>

<aside style="background-color: #dcc3a8; width: 17rem; height: 50rem; float: left; margin: 1rem; margin-top: 3rem; font-size: 20px">

<div style="color: #804d1b; padding: 1rem; font-family: Times New Roman, Times, Serif;">
<h3 style="color: #804d1b; padding: 1rem; text-align: center; font-family: Times New Roman, Times, Serif;">Gênero:</h3>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">Romance</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">Fantasia/Ficção</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">Suspense</label>
    </div>

    <hr>

<h3 style="color: #804d1b; padding: 1rem; text-align: center; font-family: Times New Roman, Times, Serif;">Autor:</h3>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">Agatha Christie</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">Colleen Hoveer</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">Holy Black</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">J.K Rowlling</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">Rick Riordan</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">Sarah J.Maas</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">Taylor Jenkins Reid</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">V.E Schwab</label>
    </div>

    <hr>

<h3 style="color: #804d1b; padding: 1rem; text-align: center; font-family: Times New Roman, Times, Serif;">Formato:</h3>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">Livro Ùnico</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">Box</label>
    </div>

</div>


    




</aside>

    <div class="container">
    <div class="row mt-5">

    
<?php 
foreach ($produtos as $key => $value) {
?>


    
    <div class="card m-3" style="width: 17rem; padding: 2rem; margin: 2rem; background-color: #dcc3a8; color: #804d1b;">
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