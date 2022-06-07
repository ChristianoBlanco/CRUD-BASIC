<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("conn_bd.php"); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h2>Gestão de Cursos</h2>
<?php
//$sql = mysql_query("SELECT * FROM curso WHERE id_curso='$_GET[id_curso]'");
//$row_sql = mysql_fetch_array($sql);
$recebe_get = @$_REQUEST['id_curso'];
if(!isset($recebe_get)){
$recebe_get = "0";
}
$sql = mysql_query("SELECT * FROM curso WHERE id_curso='$_GET[id_curso]'");
$row_sql = mysql_fetch_array($sql);
?>
<form action="class_crud.php" method="post" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $row_sql["id_curso"]; ?>" name="t_id" />

<br/><br/>
Curso:
<input type="text" value="<?php echo $row_sql["curso"]; ?>" name="t_curso" size="50" maxlength="50"/>
<br/><br/>
Aluno:
<input type="text" value="<?php echo $row_sql["nome"]; ?>" name="t_nome" size="50" maxlength="50"/>
<br/><br/>
<input type="submit" value="Cadastrar" name="bt_add" />
</form>
</body>
</html>