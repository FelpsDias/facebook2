<?php 

$MYSQLHOST = 'junction.proxy.rlwy.net';
$MYSQLUSER = 'root';
$MYSQL_ROOT_PASSWORD = 'VPRPnXtxIuPJQdsjUlkbOmZDJmuSlvLl';
$MYSQL_DATABASE = 'railway';

$conexao = new mysqli($MYSQLHOST, $MYSQLUSER, $MYSQL_ROOT_PASSWORD, $MYSQL_DATABASE);

if($conexao->connect_errno){
    echo "Erro na conexão: " . $conexao->connect_error;
}else{
    echo "Conexão efetuada com sucesso";
}
?>
