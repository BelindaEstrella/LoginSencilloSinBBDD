<?php

/*
$_GET['user']; //toma los valores que se estan pasando del formulario, con GET se recupera lo que se pasa dentro de los corchetes
$_GET['pass'];

echo 'Usuario ', $_GET['user'],' Contraseña ', $_GET['pass'];
*/

//diferencia: post no envia los datos en la url como lo hace GET, lo hace de forma
//encriptada, esto hace el ingreso mas seguro

#Usuario:Belinda
#Contraseña:Cuevas

$_POST['user'];
$_POST['pass'];

//empty() = evalua si la variable esta vacia
if(empty($_POST['user']) || empty($_POST['pass'])){
    echo 'Los dos campos son requeridos';
}else{

if($_POST['user']== 'Belinda' && $_POST['pass']=='Cuevas'){
    echo "El usuario y la contraseña fueron correctos";
    echo "<br/>";

}else{
    echo 'Usuario o contraseña incorrecto';
}
}
?>