<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>


<h2 style="color: #804d1b; padding: 1rem; text-align: center;">Preencha com seus Dados</h2>
<form action="./pagamento.php" method="post">
    <ul style="color: #804d1b;">
        <li class="form-group">
        <label for="txtName">Nome Completo</label>
        <input type="text" name="txtName" id="txtName">
        </li>
        <li class="form-group">
        <label for="txtemail">E-mail</label>
        <input type="text" name="txtemail" id="txtemail">
        </li>
        <li class="form-group">
        <label for="txtPhone">Telefone</label>
        <input type="text" name="txtPhone" id="txtPhone">
        </li>
        <li class="form-group">
        <label for="txtEndereco">Endereço</label>
        <input type="text" name="txtEndereco" id="txtEndereco">
        </li>
        <input style="background-color: #804d1b; border: none; color: white; border-radius: 5px; margin: 1rem;" type="submit" value="Ir Para o Pagamento">
    </ul>
</form>

<?php

if (isset ( $_POST['txtName']) ) {
    $nome = strtoupper( $_POST['txtName']);
    $nome = $_POST['txtName'];
    $email = $_POST['txtemail'];
    $telefone = $_POST['txtPhone'];
    $mensagem = $_POST['txtEndereco'];
    echo './pagamento.php';
}

?>

<?php
include_once './includes/_footer.php';
?>