<?php
include "conexao.php";

$id = (int)$_GET["id"];

if(empty($_GET["excluir"])) {
	echo "Exclusão de notícia<br /><br />";
	echo "Tem certeza?!<br /><br />";
	echo "<a href=\"excluir_noticia.php?id=$id&excluir=S\">Sim</a><br />";
	echo "<a href=\"administrar.php\">Não</a><br />";
}
else {
	$sql_excluir_noticia = "DELETE FROM artigo WHERE id='$id'";
	$resultado_excluir_noticia = mysql_query($sql_excluir_noticia)
	or die ("$mysql_erro");

	if(mysql_affected_rows() > 0) {
		echo "Exclusão de notícia<br /><br />";
		echo "Notícia removida com sucesso!";
	}
	else {
		echo "Notícia inválida.";
	}
}
?>
