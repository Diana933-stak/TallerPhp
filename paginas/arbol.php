<?php
require_once "../clases/ArbolBinario.php";

$res="";

if($_POST){
$pre=explode(",",$_POST['pre']);
$in=explode(",",$_POST['in']);

$arbol=new ArbolBinario();
$raiz=$arbol->construir($pre,$in);
$post=$arbol->postorden($raiz);

$res=implode(" → ",$post);
}
?>

<form method="POST">
<input name="pre" placeholder="A,B,D,E,C">
<input name="in" placeholder="D,B,E,A,C">
<button>Construir</button>
</form>

<h2><?= $res ?></h2>
<a href="../index.php">⬅ Volver</a>