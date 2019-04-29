<?php
include("conection.php");
session_start();

$login=$_POST['txtLo'];
$senha=$_POST['txtSe'];


$query=mysqli_query($strcon,"SELECT * FROM usuario_web WHERE usuario='".$login."' AND senha='".$senha."';");

$dados=mysqli_fetch_assoc($query);



if($dados['usuario']==$login && $dados['senha']==$senha){
     $_SESSION['code']=true;
     echo "<script>location.href=\"../../../admin/administrador.php\";</script>";
}else{
    echo "nao deu certo";
    session_destroy();
}


?>