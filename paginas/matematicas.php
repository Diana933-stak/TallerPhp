<?php
require_once "../clases/Matematicas.php";
$res="";

if($_POST){
    $obj=new Matematicas();

    if($_POST['tipo']=="fibo"){
        $res=$obj->fibonacci($_POST['num']);
    }

    if($_POST['tipo']=="fact"){
        $res=$obj->factorial($_POST['num']);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<h2>Fibonacci / Factorial</h2>

<form method="POST">
<input type="number" name="num" required>
<select name="tipo">
<option value="fibo">Fibonacci</option>
<option value="fact">Factorial</option>
</select>
<button>Calcular</button>
</form>

<div class="result"><?= $res ?></div>

<a class="volver" href="../index.php">Volver</a>

</body>
</html>