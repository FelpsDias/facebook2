<?php 

$dbHost = 'junction.proxy.rlwy.net';
$dbUsername = 'root';
$dbPassword = 'VPRPnXtxIuPJQdsjUlkbOmZDJmuSlvLl';
$dbName = 'railway';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno){
    echo "erro";
}else{
    echo "Conexão efetuada com sucesso";
    
}   
 

?>
