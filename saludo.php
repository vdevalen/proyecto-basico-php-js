<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Formulario</title>
    <link rel="stylesheet" href="formulario.css"/>
</head>
</head>
<body class="formulario-respuesta" style="background-color: rgb(205, 213, 221); margin-left: auto; margin-right: auto;   text-align: center;">
<h1>FORMULARIO: </h1>
<p>Estos son los datos que nos has enviado:</p>
<?php  
echo "Nombre: "; "Hola!"; echo $_POST['nombre']; echo "<br/>";
echo "apellidos: "; echo $_POST['apellidos']; echo "<br/>";
echo "E-mail: "; echo $_POST['email']; echo "<br/>";
echo "fecha: "; echo $_POST['fecha']; echo "<br/><br/>";
echo "Tipo de documento: "; echo $_POST['documento']; echo "<br/>";
echo "Genero: "; echo $_POST['genero']; echo "<br/>";
echo "Comentario: " ; echo $_POST['comentario']; echo "<br/>";
$genero = $_POST["genero"];
if($genero=="masculino") {
echo "<b>Su genero es: </b>". $genero;
echo "<br>";
echo '<img src="https://icones.pro/wp-content/uploads/2021/02/icone-png-symbole-masculin-bleu.png" alt="Texto Alternativo para la imágen" class="Clase para la imágen" id="Identificador para la imágen" width="300px" height="300px">';
echo "<br>";
}elseif($genero=="femenino"){
echo "<b>Su genero es: </b>".$genero;
echo "<br>";
echo '<img src="https://png.pngtree.com/png-vector/20190214/ourlarge/pngtree-female-gender-icon-graphic-design-template-vector-png-image_456805.jpg" alt="Texto Alternativo para la imágen" class="Clase para la imágen" id="Identificador para la imágen" width="300px" height="300px">';
}elseif($genero=="indefinido"){
echo "<br>";
echo "<b>Su genero es: </b>".$genero;
echo "<br>";
echo '<img src="https://www.cristianosgays.com/wp-content/uploads/2018/11/istockphoto-877101408-612x612.jpg" alt="Texto Alternativo para la imágen" class="Clase para la imágen" id="Identificador para la imágen" width="300px" height="300px">';
}
?>
<p>Si deseas calcular algunas operaciones, dale click aqui: <button style="background-color: white; border: none; border-radius:5px; height: 30px;width: 100px;" >  <a href="calcular.html">Calcular</a></button>
</body>
</html>

