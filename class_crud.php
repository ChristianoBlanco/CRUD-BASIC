<?php
include("conn_bd.php");
session_start();
error_reporting(0);
class crud{

    function incluir(){
		echo $this->curso; echo $this->nome;
	$this->sql = mysql_query("INSERT INTO curso (curso, nome) VALUES ('$this->curso','$this->nome')");    
    $_SESSION["msg"] = "Cadastro inserido com susesso!!!";
	print "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
	
	}
	
	function alterar(){
	
	$this->sql = mysql_query("UPDATE curso SET curso='$this->curso', nome='$this->nome' WHERE id_curso='$this->id_curso'");
	$_SESSION["msg"] = "Cadastro alterado com susesso!!!";
	print "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
	
	}
	
	function deletar(){
	
	$this->sql = mysql_query("DELETE FROM curso WHERE id_curso='$this->id_curso'");
	$_SESSION["msg"] = "Cadastro excluído com susesso!!!";
	print "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
	
	}
		
 
}
$add = new crud;

$confirma_id = $_POST["t_id"];


if($confirma_id == "" and !isset($_GET["id_curso"])){

$add->curso = $_POST["t_curso"];
$add->nome  = $_POST["t_nome"];	
$add->incluir();
}
if($confirma_id <> ""){
$add->id_curso = $_POST["t_id"];	
$add->curso = $_POST["t_curso"];
$add->nome  = $_POST["t_nome"];	
$add->alterar();
}
if(isset($_GET["id_curso"])){
$add->id_curso = $_GET["id_curso"];
$add->deletar();
}

?>