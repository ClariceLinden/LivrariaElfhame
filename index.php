<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?> 

<div class="container">
    <div class="row mt-5">
    <?php
    //crio uma variavel que contem o SQL executado
    $sql = "SELECT * FROM categorias WHERE Ativo = 1 ";
    //executa o comando SQL
    $exec = mysqli_query($conn,$sql);
    //informar a quantidade de registros de dados
    $numProdutos = mysqli_num_rows($exec);
    //percore todos os dados extraidos do banco
    while ( $dados = mysqli_fetch_assoc($exec)) {
      echo '<h1>'.$dados['Nome'].'<h1>';
    }


