<?php
include("conection.php");

$login=_POST['txtLogin'];
$senha=_POST['txtSenha'];

$query=mysqli_query($strcon,"SELECT * FROM usuario_web WHERE usuario='"+ $login + "' AND senha='"+ $senha +"';");

if($query){
    echo "<script>alert('POST ATUALIZADO!');location.href=\"..\..\..\admin\administrador.html\";</script>";
}


?>