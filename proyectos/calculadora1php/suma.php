<?php

if ($_POST) {
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$suma = $n1+$n2;
echo "LA SUMA DE: ".$n1." y ".$n2." es = ".$suma;
} else{
echo"Faltan Caracteres";
}
echo "<br>";
echo "<br>";
echo "<br>";



if ($_POST) {

$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$resta = $n1-$n2;
echo "LA RESTA DE: ".$n1." y ".$n2." es = ".$resta;
} else{
echo"Faltan Caracteres";
}


echo "<br>";
echo "<br>";
echo "<br>";





if ($_POST) {

$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$multiplicar = $n1*$n2;
echo "LA MULTIPLICACION DE: ".$n1." y ".$n2." es = ".$multiplicar;
}else{
echo"te falta agregar valores";
}

echo "<br>";
echo "<br>";
echo "<br>";





if ($_POST) {

$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$dividir = $n1/$n2;
echo "LA DIVISION DE:  ".$n1." y ".$n2." es = ".$dividir;
}else{
echo"te falta agregar valores";

}

?>
