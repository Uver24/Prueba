<?php include "conexion.php";

$id = $_POST['tipo_documento_id'];
$nd = $_POST['numero_documento'];
$n1 = $_POST['nombre1'];
$n2 = $_POST['nombre2'];
$p1 = $_POST['apellido1'];
$p2 = $_POST['apellido2'];
$gen = $_POST['genero_id'];
$de = $_POST['departamento_id'];
$mu = $_POST['municipio_id'];

$up = $con->query("UPDATE paciente SET numero_documento ='$nd', nombre1='$n1', nombre2='$n2', apellido1='$p1', apellido2='$p2,' genero_id='$gen', departamento_id = '$de', municipio_id='$mu' WHERE id='$id' ");
if ($up) {
    echo header('location:inicio.php');
} else {
    echo "<script> location.href='actualizar.php?id=" . $id . "'</script>";
}
