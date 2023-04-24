<?php
include('conexion.php');
session_start();

$sesion=$_SESSION['cliente'];
$data=mysqli_query($conexion,"select * from usuarios u, roles r where username='$sesion' and u.rol_id=r.id");

while($consulta=mysqli_fetch_array($data)){
    $rol=$consulta['rol'];


}
if($rol=="admin"){
include("roles/admin/admin.php");
}elseif($rol=="estudiante"){
 include("roles/estudiante/estudiante.php");
}


?>