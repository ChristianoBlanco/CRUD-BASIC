<?php
error_reporting(0);
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conn_lider = "localhost";
//$database_conn_lider = "grlider4";
$username_conn_lider = "root";
$password_conn_lider = "";
$conn_lider = mysql_pconnect($hostname_conn_lider, $username_conn_lider, $password_conn_lider) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db("innweb", $conn_lider); 
?>

<?PHP
/* 
# PHP 7
$conexao = mysqli_connect('localhost','root','');
$banco = mysqli_select_db($conexao,'innweb');
mysqli_set_charset($conexao,'utf8');
 
/*$sql = mysqli_query($conexao,"select * from tb_pessoa") or die("Erro");
while($dados=mysqli_fetch_assoc($sql))
    {
        echo $dados['nome'].'<br>';
    }*/
?>