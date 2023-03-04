<?php      
$numero1 =$_POST["numero1"]; 
$numero2 =$_POST["numero2"]; 
$op = $_POST["op"];

if($op=="Suma") {
    $resultado = $numero1 + $numero2;
    echo "El resultado de la suma es: ".$resultado;
}else if ($op=="Resta"){
    $resultado = $numero1-$numero2;
    echo "El resultado de la resta es: ".$resultado;
}else if($op=="Multiplicacion") {
    $resultado = $numero1*$numero2;
    echo"El resultado de la multiplicación es: ".$resultado;
}else {
    $resultado = $numero1/$numero2;
    echo"El resultado de la división es: ".$resultado;
}
?>