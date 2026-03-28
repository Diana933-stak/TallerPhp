<?php
require_once "../clases/Acronym.php";
$res="";

if($_POST){
$obj=new Acronym($_POST['frase']);
$res=$obj->generar();
}
?>

<form method="POST">
<input name="frase" placeholder="Ingrese frase">
<button>Generar</button>
</form>

<h2><?= $res ?></h2>
<a href="../index.php">⬅ Volver</a>