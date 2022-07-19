<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>

<h2 style="color: #804d1b; padding: 1rem; text-align: center; font-family: Times New Roman, Times, Serif;"">Escolha o Método de Pagamento</h2>

<div style="padding: 1rem; margin-left: 23rem;">
    <a style="background-color: transparent; margin: 1rem; border: none;" class="btn btn-primary" href="<?php echo './pix.php'; ?>" role="button"><img style="height: 3rem; width: 7rem;" src="./design/pix.png" alt="pix"></a>
    <h5 style="color: #804d1b;">Pix</h5>
    <a style="background-color: transparent; margin: 1rem; border: none;" class="btn btn-primary" href="<?php echo './cartao.php'; ?>" role="button"><img style="height: 5rem; width: 7rem;" src="https://cdn.pixabay.com/photo/2018/06/20/18/05/bank-3487033_960_720.png" alt="cartão de crédito"></a>
    <h5 style="color: #804d1b;">Cartão de Crédito</h5>
    <a style="background-color: transparent; margin: 1rem; border: none;" class="btn btn-primary" href="<?php echo './cartao.php'; ?>" role="button"><img style="height: 5rem; width: 5rem;" src="https://cdn.pixabay.com/photo/2017/03/17/13/37/credit-card-2151588_960_720.png" alt=""></a>
    <h5 style="color: #804d1b;">Cartão de Débito</h5>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>