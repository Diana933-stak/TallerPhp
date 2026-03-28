<?php
require_once "../clases/Acronym.php";
$res="";

if($_POST){
$obj=new Acronym($_POST['frase']);
$res=$obj->generar();
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<h2>Acrónimo</h2>

<form method="POST">
<input name="frase">
<button>Generar</button>
</form>

<div class="result"><?= $res ?></div>

<a class="volver" href="../index.php">Volver</a>

</body>
</html>