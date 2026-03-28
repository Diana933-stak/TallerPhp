$_SESSION['historial'][]="$a $op $b = $res";
}

if(isset($_POST['borrar'])) $_SESSION['historial']=[];
?>

<form method="POST">
<input name="a">
<input name="b">
<select name="op">
<option value="suma">+</option>
<option value="resta">-</option>
<option value="multi">*</option>
<option value="div">/</option>
</select>
<button>Calcular</button>
</form>

<h2><?= $res ?></h2>

<h3>Historial</h3>
<?php foreach($_SESSION['historial'] as $h) echo $h."<br>"; ?>

<form method="POST">
<button name="borrar">Borrar historial</button>
</form>

<a href="../index.php">⬅ Volver</a>