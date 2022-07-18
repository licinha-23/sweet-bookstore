<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>

<?php
$id = $_GET['id'];
$tipo = $_GET['tipo'];

echo $id;
?>

<div class="container mt-5">
    <div class="row">
        <div style="color: #804d1b;" class="col">
        <h1 style="font-family: Times New Roman, Times, Serif;"><?php echo $produtos[$id]['nome']; ?></h1>
        <p><?php echo $produtos[$id]['autor']; ?></p>
        <img style="height: 2rem; width: 9rem; margin-bottom: 1rem;" src="./estrelas/<?php echo $produtos [$id] ['avaliacao']; ?>">
        <div>
        <img src="./content/<?php echo $produtos [$id] ['imagem']; ?>">
        <p style="margin: 2rem 2rem 2rem 0;"><?php echo $produtos[$id]['sinopse']; ?></p>
        <h5 style="margin: 2rem 2rem 2rem 0;"><?php echo $produtos[$id]['preço']; ?></h5>
        </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col">
        <a style="background-color: #804d1b; border: none;" href="./comprar.php" class="btn btn-primary">Comprar</a>
        </div>
        <div class="col">
        <a style="background-color: #804d1b; border: none;" href="index.php?" class="btn btn-primary">Voltar</a>
        </div>
    </div>

<?php
include_once './includes/_footer.php';
?>