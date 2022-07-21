<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>


<h2 style="color: #804d1b; padding: 1rem; text-align: center; font-family: Times New Roman, Times, Serif;"">Venda Seus Livros Conosco!</h2>
<form action="./contato.php" method="post">
    <ul style="color: #804d1b; margin: 0;">
        <li class="form-group">
        <label for="txtNome">Nome Completo</label>
        <input type="text" name="txtNome" id="txtNome">
        </li>
        <li class="form-group">
        <label for="txtEmail">E-mail</label>
        <input type="text" name="txtEmail" id="txtEmail">
        </li>
        <li class="form-group">
        <label for="txtTelefone">Telefone</label>
        <input type="text" name="txtTelefone" id="txtTelefone">
        </li>
        <li class="form-group">
        <label for="txtMensagem">Mensagem</label>
        <input type="text" name="txtMensagem" id="txtMensagem">
        </li>
        <input style="background-color: #804d1b; border: none; color: white; border-radius: 5px; margin: 1rem;" type="submit" value="Cadastrar">
    </ul>
</form>

<?php

if (isset ( $_POST['txtNome']) ) {
    $nome = strtoupper( $_POST['txtNome']);
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtTelefone'];
    $mensagem = $_POST['txtMensagem'];
    echo '<h5 style="text-align: center; padding: 1rem; color: #804d1b;" >Você foi cadastrado com sucesso! Aguarde que entre 5 e 7 dias entraremos em contato para a venda dos seus livros.</h5>';
}

?>

<?php
include_once './includes/_footer.php';
?>