<?php
require_once "../clases/Binario.php";
$res="";

if($_POST){
$obj=new Binario($_POST['num']);
$res=$obj->convertir();
}
?>

<form method="POST">
<input name="num" type="number">
<button>Convertir</button>
</form>

<h2><?= $res ?></h2>
<a href="../index.php">⬅ Volver</a>