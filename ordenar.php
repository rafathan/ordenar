<?php

$points = array();
$original = '';

if(isset($_POST["array"])){
	//echo "isset array";
	$original = $_POST["array"];
	$points = explode(",", $_POST["array"]);
	var_dump($_POST);
}

if(isset($_POST["ascendente"])){
	//echo "asc1";
	ascendente($points);
}
if(isset($_POST["descendente"])){
	//echo "desc1";
	descendente($points);
}

function ascendente($array) {
	//echo "asc2";
  	asort($array);
}
function descendente($array) {
	//echo "desc2";
  	arsort($array);
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
