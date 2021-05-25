<?php 

if(isset($_POST['bot'])){


    function sanitizarTexto($variable){
        $variable=filter_var($variable, FILTER_SANITIZE_STRING);
        return $variable;
    }
    function sanitizarhtml ($variable ){
        $variable=filter_var($variable, FILTER_SANITIZE_SPECIAL_CHARS);
        return $variable;
    }

$nombre = sanitizarTexto( $_POST['nombre']);


if(empty($nombre)){

    echo "<p class='error'> El nombre debe estar presente </p><br>";

}else{

if(strlen($nombre)>30){



}else{

echo "<p class='dato'>El nombre ingresado es: ".$nombre."</p><br>";

}

}

$apellido = sanitizarTexto($_POST['apellido']);

if(empty($apellido)){

    echo "<p class='error'> El apellido debe estar presente </p><br>";

}else{
    echo "<p class='dato'>El apellido ingresado es: ".$apellido."</p><br>";
}

$email = sanitizarTexto($_POST['mail2']);

if(empty($email)){

    echo "<p class='error'> Debe ingresar el mail</p><br>";

}else{
    echo "<p class='dato'> El mail ingresado es : ".$email."</p><br>";

}
$mensaje = sanitizarTexto($_POST['mensaje']);

if(empty($mensaje)){

    echo "<p class='error'> Debe ingresar un mensaje</p><br>";

}else{
    echo "<p class='dato'> El mensaje ingresado es: ".$mensaje."</p><br>";
}

}


?>