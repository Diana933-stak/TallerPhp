<?php
require_once "../clases/cjt.php";

$res="";

if($_POST){
$A=explode(",",$_POST['A']);
$B=explode(",",$_POST['B']);

$res="
Unión: ".implode(",",Conjuntos::union($A,$B))."<br>
Intersección: ".implode(",",Conjuntos::interseccion($A,$B))."<br>
A-B: ".implode(",",Conjuntos::diferencia($A,$B))."<br>
B-A: ".implode(",",Conjuntos::diferencia($B,$A));
}
?>

<form method="POST">
<input name="A" placeholder="1,2,3">
<input name="B" placeholder="2,3,4">
<button>Calcular</button>
</form>

<h3><?= $res ?></h3>
<a href="../index.php">⬅ Volver</a>