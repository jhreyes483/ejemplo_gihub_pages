<<!DOCTYPE html>
<html>
<head>
	<title>Tablas</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">



<body background="imagen/tab2.jpg" height ="700">


<div id = "tit" ><h2>TABLAS</h2></div>



<li><a href="index.php">inicio</a></li>
<center>



<div id  = "tabla">
<?php
for ($i=1; $i <=9 ; $i++){
    echo "<br>la tabla del $i es:";
    echo "<table border = '1px'>
    <tr>
    <th>numero</th>
    <th>operador</th>
    <th>multiplo</th>
    <th>=</th>
    <th>resultado</th>
    </tr>";

    for($e=0; $e<=10; $e++)
{$resultado =$i*$e;
echo "<tr>
<th>$i</th>
<th>*</th>
<th>$e</th>
<th>=</th>
<th>$resultado</th>
</tr>";
}

echo "</table>";
}
?>



</center>

</div>
</body>
</html>