<?php
require_once "../clases/Calculadora.php";
$res="";

if($_POST){
$a=$_POST['a'];
$b=$_POST['b'];
$op=$_POST['op'];

switch($op){
case "+": $obj=new Suma(); break;
case "-": $obj=new Resta(); break;
case "*": $obj=new Multiplicacion(); break;
case "/": $obj=new Division(); break;
}

$res=$obj->calcular($a,$b);
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<h2>Calculadora</h2>

<form method="POST">
<input name="a">
<input name="b">
<select name="op">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
<button>Calcular</button>
</form>

<div class="result"><?= $res ?></div>

<a class="volver" href="../index.php">Volver</a>

</body>
</html>