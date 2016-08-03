<?php

define('BD_USER', 'root');
define('BD_PASS', '');
define('BD_NAME', 'angoturismo');

mysql_connect('localhost', BD_USER, BD_PASS) or die (mysql_error);
mysql_select_db(BD_NAME) or die ("Erro ao selecionar banco de dados");

mysql_set_charset('utf8'); /* Essa cena */

?>

 
 