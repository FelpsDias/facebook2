<?php 

$dbHost = 'LocalHost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formsFacebook';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno){
    echo "erro";
}else{
    echo "Conexão efetuada com sucesso";
    
}   
 

?>