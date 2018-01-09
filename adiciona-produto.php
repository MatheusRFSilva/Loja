<? include("cabecalho.php")?>
<?php
$nome = $_GET["nome"];
$preco = $_GET["preco"];
$conexao = mysqli_connect('sql130.main-hosting.eu','u407834309_silva','slipknot','u407834309_dbnew');

$query = "insert into produtos (nome,preco) values ('{$nome}',{$preco})";
if (mysqli_query($conexao,$query)){ ?>
<p class="alert-success">Produto <?=$nome; ?>, <?=$preco;?> adicionado com sucesso!</p>
<?}else{?>
  <p class="alert-danger">Produto Não adicionado !</p>
<?};

mysqli_close($conexao);
 ?>


<? include("rodape.php")?>
