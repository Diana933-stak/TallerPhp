<?php
require_once "../clases/Matematicas.php";
$res="";

if($_POST){
$n=$_POST['num'];
$tipo=$_POST['tipo'];

$obj=($tipo=="fibo")?new Fibonacci():new Factorial();
$res=$obj->calcular($n);

if(is_array($res)) $res=implode(",",$res);
}
?>

<form method="POST">
<input name="num" type="number">
<select name="tipo">
<option value="fibo">Fibonacci</option>
<option value="fact">Factorial</option>
</select>
<button>Calcular</button>
</form>

<h2><?= $res ?></h2>
<a href="../index.php">⬅ Volver</a>