<?php
include "conexao.php";

echo "<table border=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"500\">";
echo "<tr>";
echo "<td width=\"50\" valign=\"top\"><div align=\"center\">ID</div></td>";
echo "<td width=\"210\" valign=\"top\"><div align=\"center\">Título</div></td>";
echo "<td width=\"60\" valign=\"top\"><div align=\"center\">Enviado em</div></td>";
echo "<td width=\"60\" valign=\"top\"><div align=\"center\">Publicado?</div></td>";
echo "<td width=\"60\" valign=\"top\"><div align=\"center\">Alterar</div></td>";
echo "<td width=\"60\" valign=\"top\"><div align=\"center\">Excluir</div></td>";
echo "</tr>";

$sql_administrar_noticias = "SELECT id, titulo, data_hora, publicado FROM artigo ORDER BY id DESC";
$resultado_administrar_noticias = mysql_query($sql_administrar_noticias)
or die (mysql_error());

if(mysql_num_rows($resultado_administrar_noticias) < 1) {
	echo "<tr>";
	echo "<td width=\"50\" valign=\"top\" colspan=\"6\"><div align=\"center\">Nenhuma notícia encontrada</div></td>";
	echo "</tr>";
}
else {
	while ($linha=mysql_fetch_array($resultado_administrar_noticias)) {
		$id = $linha["id"];
		$titulo = $linha["titulo"];
		$data_hora = $linha["data_hora"];
		$publicado = $linha["publicado"];

		if($publicado=="S") {
			$publicado = "Sim";
		}
		else {
			$publicado = "Não";
		}

		echo "<tr>";
		echo "<td width=\"50\" valign=\"top\"><div align=\"center\">$id</div></td>";
		echo "<td width=\"210\" valign=\"top\">$titulo</td>";
		echo "<td width=\"60\" valign=\"top\"><div align=\"center\">$data_hora</div></td>";
		echo "<td width=\"60\" valign=\"top\"><div align=\"center\">$publicado</div></td>";
		echo "<td width=\"60\" valign=\"top\"><div align=\"center\"><a href=\"alterar_noticia.php?id=$id\">Alterar</a></div></td>";
		echo "<td width=\"60\" valign=\"top\"><div align=\"center\"><a href=\"excluir_noticia.php?id=$id\">Excluir</a></div></td>";
		echo "</tr>";
	}
}

echo "</table>";
?>
