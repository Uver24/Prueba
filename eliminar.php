<?php include "conexion.php";

$id = $_REQUEST['id'];

$del = $con -> query("DELETE FROM paciente WHERE id = $id");
if($del){
    echo header('location:inicio.php');
}else{
    echo "<script>
    alert('El registro no se pudo eliminar');
    location.href='inicio.php';
    </script>";  
}
