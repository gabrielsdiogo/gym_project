<?php
include("conection.php");

$login=$_POST['txtLo'];
$senha=$_POST['txtSe'];


$query=mysqli_query($strcon,"SELECT * FROM usuario_web WHERE usuario='".$login."' AND senha='".$senha."';");

$dados=mysqli_fetch_assoc($query);



if($dados['usuario']==$login && $dados['senha']==$senha){
    
    echo "<script>location.href=\"../../../admin/administrador.html\";</script>";
}else{
    echo "nao deu certo";
}


?>