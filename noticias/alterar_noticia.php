<?php
include "conexao.php";

if(!isset($_POST["submit"])) {
	$id = (int)$_GET["id"];

	$sql_alterar_noticia = "SELECT * FROM artigo WHERE id='$id' ORDER BY id DESC";
	$resultado_alterar_noticia = mysql_query($sql_alterar_noticia)
	or die (mysql_error());

	if(mysql_num_rows($resultado_alterar_noticia) < 1) {
		echo "Notícia inválida.";
	}
	else {
		while ($linha=mysql_fetch_array($resultado_alterar_noticia)) {
			$id = $linha["id"];
			$titulo = $linha["titulo"];
			$descricao = $linha["descricao"];
			$artigo = $linha["artigo"];
			$autor = $linha["autor"];
			$email = $linha["email"];
			$data_hora = $linha["data_hora"];
			$ip = $linha["ip"];
			$publicado = $linha["publicado"];

			if($publicado=="S") {
				$publicado = "Sim";
			}
			else {
				$publicado = "Não";
			}

			echo "Alterar notícia<br /><br />";
			echo "<form action=\"alterar_noticia.php?id=$id\" name=\"form\" method=\"post\">";
			echo "Título:<br /><input name=\"titulo\" type=\"text\" maxlength=\"100\" value=\"$titulo\" size=\"40\" /><br />";
			echo "Descrição:<br /><input name=\"descricao\" type=\"text\" maxlength=\"255\" value=\"$descricao\" size=\"40\" /><br />";
			echo "Notícia:<br /><textarea name=\"artigo\" rows=\"10\" cols=\"30\">$artigo</textarea><br />";
			echo "Autor:<br /><input name=\"autor\" type=\"text\" maxlength=\"100\" value=\"$autor\" size=\"40\" /><br />";
			echo "E-mail:<br /><input name=\"email\" type=\"text\" maxlength=\"255\" value=\"$email\" size=\"40\" /><br />";
			echo "Enviado em: $data_hora (IP: $ip)<br />";
			echo "Publicar? Status: $publicado<br />";
			echo "<select size=\"1\" name=\"publicado\">";
			echo "<option value=\"S\">Sim</option>";
			echo "<option value=\"N\">Não</option>";
			echo "</select><br />";
			echo "<input name=\"submit\" type=\"submit\" value=\"Enviar\" />&nbsp;&nbsp;<input type=\"reset\" value=\"Redefinir\" />";
			echo "</form>";
		}
	}
}
else {
	$id = (int)$_GET["id"];
	$titulo = $_POST["titulo"];
	$descricao = $_POST["descricao"];
	$artigo = $_POST["artigo"];
	$autor = $_POST["autor"];
	$email = $_POST["email"];
	$publicado = $_POST["publicado"];

	$sql_alterar_noticia = "UPDATE artigo SET titulo='$titulo', descricao='$descricao', artigo='$artigo', autor='$autor', email='$email', publicado='$publicado' WHERE id='$id'";
	$resultado_alterar_noticia = mysql_query($sql_alterar_noticia)
	or die (mysql_error());

	echo "Alterar notícia<br /><br />";
	echo "Notícia alterada com sucesso!";
}
?>
