<?php
include "conexao.php";

if(!isset($_POST["submit"])) {
	echo "Envio de notícia<br /><br />";
	echo "<form action=\"enviar_noticia.php\" name=\"form\" method=\"post\">";
	echo "Título:<br /><input name=\"titulo\" type=\"text\" maxlength=\"100\" size=\"40\" /><br />";
	echo "Descrição:<br /><input name=\"descricao\" type=\"text\" maxlength=\"255\" size=\"40\" /><br />";
	echo "Notícia:<br /><textarea name=\"artigo\" rows=\"10\" cols=\"30\"></textarea><br />";
	echo "Autor:<br /><input name=\"autor\" type=\"text\" maxlength=\"100\" size=\"40\" /><br />";
	echo "E-mail:<br /><input name=\"email\" type=\"text\" maxlength=\"255\" size=\"40\" /><br />";
	echo "<input name=\"submit\" type=\"submit\" value=\"Enviar\" />&nbsp;&nbsp;<input type=\"reset\" value=\"Redefinir\" />";
	echo "</form>";
}
else {
	$titulo = $_POST["titulo"];
	$descricao = $_POST["descricao"];
	$artigo = $_POST["artigo"];
	$autor = $_POST["autor"];
	$email = $_POST["email"];
	$data_hora = date("Y-m-d H:i:s");
	$ip = getenv("REMOTE_ADDR");

	$sql_enviar_noticia = "INSERT INTO artigo (titulo, descricao, artigo, autor, email, data_hora, ip, publicado) VALUES ('$titulo', '$descricao', '$artigo', '$autor', '$email', '$data_hora', '$ip', 'N')";
	$resultado_enviar_noticia = mysql_query($sql_enviar_noticia)
	or die (mysql_error());

	echo "Envio de notícia<br /><br />";
	echo "Notícia enviada com sucesso!";
}
?>