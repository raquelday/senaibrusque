<?php
include "conexao.php";

$sql_listar_noticias = "SELECT id, titulo, descricao, autor, email, data_hora, publicado FROM artigo WHERE publicado='S' ORDER BY id DESC LIMIT 10";
$resultado_listar_noticias = mysql_query($sql_listar_noticias)
or die (mysql_error());

if(mysql_num_rows($resultado_listar_noticias) < 1) {
	echo "Nenhum notícia publicada.";
}
else {
	while ($linha=mysql_fetch_array($resultado_listar_noticias)) {
		$id = $linha["id"];
		$titulo = $linha["titulo"];
		$descricao = $linha["descricao"];
		$autor = $linha["autor"];
		$email = $linha["email"];
		$data_hora = $linha["data_hora"];

		echo "Título: $titulo<br />";
		echo "Descrição: $descricao<br />";
		echo "Autor: $autor<br />";
		echo "E-mail: $email<br />";
		echo "Enviado em: $data_hora<br />";
		echo "<hr />";
	}
}
?>