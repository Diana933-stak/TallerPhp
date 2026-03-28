<?php
require_once "../clases/Estadistica.php";
$res = "";

if($_POST){

    $nums = preg_split('/\s*,\s*/', $_POST['nums']);

    $obj = new Estadistica($nums);

    $res = "Promedio: " . $obj->promedio() .
           "<br>Media: " . $obj->media() .
           "<br>Moda: " . implode(",", $obj->moda());
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Estadística</title>
<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<h2>Estadística</h2>

<form method="POST">
<input name="nums" placeholder="Ej: 1,2,2,3,4" required>
<button>Calcular</button>
</form>

<div class="result">
<?= $res ?>
</div>

<a class="volver" href="../index.php">⬅ Volver</a>

</body>
</html>