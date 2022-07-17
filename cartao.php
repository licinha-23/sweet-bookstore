<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>

<form action="./cartao.php" method="post">
    <ul style="color: #804d1b; text-align: center; margin: 0rem 4rem 1rem 4rem; padding: 3rem;">
        <label for="txtNumero">Número do Cartão</label>
        <input type="text" name="txtNumero" id="txtNumero">
        <label for="txtTitular">Nome do Titular</label>
        <input type="text" name="txtTitular" id="txtTitular">
        <label for="txtCodigo">Código de Segurança</label>
        <input type="text" name="txtCodigo" id="txtCodigo">
        <label for="txtVencimento">Vencimento</label>
        <input type="text" name="txtVencimento" id="txtVencimento">
        <input style="background-color: #804d1b; border: none; color: white; border-radius: 5px; margin: 1rem;" type="submit" value="Cadastrar Cartão">
    </ul>
</form>

<?php

if (isset ( $_POST['txtNumero']) ) {
    $nome = strtoupper( $_POST['txtNumero']);
    $nome = $_POST['txtNumero'];
    $email = $_POST['txtTitular'];
    $telefone = $_POST['txtCodigo'];
    $mensagem = $_POST['txtVencimento'];
    echo '<h5 style="color: #804d1b; text-align: center; padding: 1rem;">Cartão cadastrado com sucesso! Enviaremos um e-mail com as atualizações do seu pedido assim que o pagamento for confirmado.</h5>';
}

