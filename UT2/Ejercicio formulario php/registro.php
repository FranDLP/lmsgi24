<?php

$db_host = "localhost";
$db_user = "Fran";
$db_pass = "Fran";
$db_password = "prueba_bd";
$db_table_name = "usuario";

/**
 * Conecta a la base de datos usnado mysqli en modo procedimental
 */

 $db_connection = mysqli_connect ($db_host, $db_user, $db_password, $db_table_name)