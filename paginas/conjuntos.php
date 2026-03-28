<?php
require_once "../clases/Conjuntos.php";
$res="";

if($_POST){
$A=explode(",",$_POST['A']);
$B=explode(",",$_POST['B']);

$obj=new Conjuntos();

$res="Unión: ".implode(",",$obj->union($A,$B))."<br>";
$res.="Intersección: ".implode(",",$obj->interseccion($A,$B))."<br>";
$res.="A-B: ".implode(",",$obj->diferencia($A,$B))."<br>";
$res.="B-A: ".implode(",",$obj->diferencia($B,$A));
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<h2>Conjuntos</h2>

<form method="POST">
<input name="A">
<input name="B">
<button>Calcular</button>
</form>

<div class="result"><?= $res ?></div>

<a class="volver" href="../index.php">Volver</a>

</body>
</html>