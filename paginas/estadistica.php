<?php
require_once "../clases/Estadistica.php";
$res="";

if($_POST){
$nums=explode(",",$_POST['nums']);
$obj=new Estadistica($nums);

$res="Promedio: ".$obj->promedio().
"<br>Media: ".$obj->media().
"<br>Moda: ".implode(",",$obj->moda());
}
?>

<form method="POST">
<input name="nums" placeholder="1,2,3,4">
<button>Calcular</button>
</form>

<h3><?= $res ?></h3>
<a href="../index.php">⬅ Volver</a>