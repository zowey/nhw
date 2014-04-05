
<?php
$connection =mysql_connect ('localhost', 'root', '') or die ('unable to connect');
mysql_select_db('hackaton') or die ("nemrem u bazu");
//$connection =mysql_connect ('localhost', 'lhumski', 'E7q7qLRQcTvm45Q6') or die ('unable to connect');
//  mysql_select_db('lhumski_lhumski') or die ("nemrem u bazu");
mysql_set_charset('utf8');
mysql_query("set character set utf8");
mysql_query("SET NAMES 'utf8'")

?>