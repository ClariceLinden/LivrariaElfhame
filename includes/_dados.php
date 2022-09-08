<?php
$produtos = array(
    0 => array('nome' => 'Percy Jackson e o Ladrão de Raios','preco'=>'R$30','descricao'=>'Percy Jackson e os Olimpianos livro 1','imagem'=>'pjo1.jpg'),
    0 => array('nome' => 'Percy Jackson e o Mar de Monstros','preco'=>'R$30','descricao'=>'Percy Jackson e os Olimpianos livro 2','imagem'=>'pjo2.jpg'),
);

$sql = '';

foreach ($produtos as $i => $value) {
    $nome = $value['nome'];
    $preco = $value['preco'];
    $descricao = $value['descricao'];
    $imagem = $value['imagem'];

    $sql = "$sql <br> INSERT INTO produtos(Nome, Preco, Descricao, imagem, categoritaID, ativo) VALUE('$nome','$preco', '$descricao', '$imagem', 1, 1);";


};

?>