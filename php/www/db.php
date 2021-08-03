<?php
$mysqli = new mysqli("database_host", "root", "Custom.2021", "custom_db");
if ($mysqli -> connect_errno){
    echo "@Error. Fallo al conectar a MariaDB: (" . $mysqli -> connect_errno . ")" . $mysqli->connect_errno;
}
echo $mysqli -> host_info . "<br/>";

$mysqli = new mysqli("database_host", "root", "Custom.2021", "custom_db", 3306);
if ($mysqli ->connect_errno){
    echo "@Error. Fallo al conectar a MariaDB: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}
echo $mysqli -> host_info . "<br/>";