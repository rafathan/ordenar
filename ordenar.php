<?php

$points = array();
$original = '';

if(isset($_POST["array"])){
	$original = $_POST["array"];
	$points = explode(",", $_POST["array"]);
}

if(isset($_POST["ascendente"])){
	$points = ascendente($points);
}
if(isset($_POST["descendente"])){
	$points = descendente($points);
}

function ascendente($array) {
  	asort($array);
	return $array;
}
function descendente($array) {
  	arsort($array);
	return $array;
}

function mostrar($array){
	foreach ($array as $element) {
		echo $element . ",";
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Ordenar</title>
		<meta name="description" content="" />
		<meta name="author" content="rafa" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<form action="" method="post">
			Introduce la secuencia de números a ordenar, separados por comas.<br>
			<input type="text" name="array" value="<?php echo $original; ?>">
		
			<p>
				<input type="submit" value="Original">
			</p>
			<p>
				<input type="submit" name="ascendente" value="Ascendente">
				<input type="submit" name="descendente" value="Descendente">
			</p>
		</form>

		<p><?php mostrar($points); ?></p>

	</body>
</html>
