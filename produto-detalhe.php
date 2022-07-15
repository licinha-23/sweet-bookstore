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
        <div class="col">
        <h1><?php echo $produtos[$id]['nome']; ?></h1>
        <p><?php echo $produtos[$id]['autor']; ?></p>
        <img src="./content/<?php echo $produtos [$id] ['imagem']; ?>">
        <h5><?php echo $produtos[$id]['preço']; ?></h5>
        </div>
    </div>
     
    <div class="row">
        <div class="col">
        <a href="index.php"><button type="button" class="btn btn-primary">Voltar</button></a>
        </div>
        <div class="col">
        <a href="contato.php"><button type="button" class="btn btn-primary">Comprar</button></a>
        </div>
    </div>

<?php
include_once './includes/_footer.php';
?>