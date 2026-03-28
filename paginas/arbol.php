<?php
require_once "../clases/Arbol.php";

$res = "";

if($_POST){

    $pre = preg_split('/\s*,\s*/', strtoupper($_POST['pre']));
    $in  = preg_split('/\s*,\s*/', strtoupper($_POST['in']));

    $obj = new Arbol();
    $raiz = $obj->construir($pre, $in);

    if($raiz){
        $res = $obj->imprimirBonito($raiz);
    } else {
        $res = "Error en los datos";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<h2>Árbol Binario</h2>

<form method="POST">
<input name="pre" placeholder="A,B,D,E,C" required>
<input name="in" placeholder="D,B,E,A,C" required>
<button>Generar</button>
</form>

<div class="result">
<?= $res ?>
</div>

<a class="volver" href="../index.php">Volver</a>

</body>
</html>