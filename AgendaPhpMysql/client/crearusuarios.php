<?php 
require('../server/lib.php');

$con = new ConectorBD();

if ($con->initConexion()=='OK'){
    $datos['nombres'] = "'Robert Sanz'";
    $datos['correo'] = "'robert@gmail.com'";
    $datos['password'] = "'".password_hash("123",PASSWORD_DEFAULT)."'";
    $datos['fecnac'] = "'11/09/1987'";

    if ($con->insertData('usuarios', $datos)) {
      echo "Se han registrado los datos correctamente";
    }else echo "Se ha producido un error en la actualización";

    $datos['nombres'] = "'Beto Romero'";
    $datos['correo'] = "'betorom@gmail.com'";
    $datos['password'] = "'".password_hash("123",PASSWORD_DEFAULT)."'";
    $datos['fecnac'] = "'25/01/1990'";

    if ($con->insertData('usuarios', $datos)) {
      echo "Se han registrado los datos correctamente";
    }else echo "Se ha producido un error en la actualización";

    $datos['nombres'] = "'Bob Rom'";
    $datos['correo'] = "'bobrom@gmail.com'";
    $datos['password'] = "'".password_hash("123",PASSWORD_DEFAULT)."'";
    $datos['fecnac'] = "'02/07/1987'";

    if ($con->insertData('usuarios', $datos)) {
      echo "Se han registrado los datos correctamente";
    }else echo "Se ha producido un error en la actualización";


    $con->cerrarConexion();
}else {
    echo "Se presentó un error en la conexión";
}

?>