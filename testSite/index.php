<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    </head>
<body>
<a href="?nb=2"> Affichage 2 Hello </a><br>
<a href="?nb=5"> Affichage 5 Hello </a><br>
<a href="?nb=15"> Affichage 15 Hello </a><br>
<form>
	<label for="nb">Nombre : </label>
	<input id='nb' name='nb' type="number" max="200">
</form>	
 <?php

		$texte="Hello world(dynamique)<br>";
		$i=0;
		$max=$_GET["nb"];
		$max=min(200,$max);
		while($i<$max){
			$color="";
			if($i%2==0)
				$color="color:red;";
		echo "<span style='{$color}font-size: {$i}pt;'>{$texte}</span>";
		$i++;
		}	
?>
</body>
</html>