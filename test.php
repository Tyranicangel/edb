<?php
$db1= pg_connect("host=localhost dbname=pdac user=postgres password=noobtard123") or die('Could not connect:'.pg_last_error());
$q1=pg_query("SELECT COUNT(*) FROM pdaccountinfo");
echo '<pre>';
print_r(pg_fetch_all($q1));
echo '</pre>';
?>