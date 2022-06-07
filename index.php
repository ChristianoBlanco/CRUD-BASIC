<?php 
include_once("conn_bd.php");
session_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<h2 align="center">Consulta Cursos</h2>
<h4 align="center"><?php echo @$_SESSION["msg"]; @$_SESSION["msg"] = ""; ?></h4>
<br/><br/>
<table width="500" border="1" align="center">
  <tr>
    <td>Curso</td>
    <td>Aluno</td>
    <td>Opções</td>
  </tr>
  <?php
  $sql = mysql_query("SELECT * FROM curso ");
  //$sql = mysqli_query($conexao,"SELECT * FROM curso") or die("Erro");
  while($row_sql = mysql_fetch_array($sql)){ 
  ?>
  <tr>
    <td><?php echo "$row_sql[curso]"; ?></td>
    <td><?php echo "$row_sql[nome]"; ?></td>
    <td><a href="formulario.php?id_curso=<?php echo "$row_sql[id_curso]";?>" target="_parent">Alterar</a> | <a href="class_crud.php?id_curso=<?php echo "$row_sql[id_curso]";?>" target="_parent">Excluir</a></td>
  </tr>
  <?php
  }
  ?>
</table>
<br/>
<table width="500" border="0" align="center">
  <tr>
    <td><a href="formulario.php" target="_parent">Incluir Curso</a></td>
  </tr>
</table>


<body>
</body>
</html>