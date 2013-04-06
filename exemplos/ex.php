<?php
if (count($_POST)) {
	echo "<h1>Dados recebidos</h1><ul>";
	foreach ($_POST as $k=>$v) {
		echo "<li>" . $k . " = "  . $v . "</li>";
	}
	echo "</ul>";
}