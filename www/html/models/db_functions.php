<?php
include 'db_connect.php';

function adminLogin($email, $password){
    $result = pg_prepare($GLOBALS['db'], "admin_query", "SELECT * FROM admin WHERE admin_email = lower($1) AND admin_password = crypt($2, admin_password)");
    $result = pg_execute($GLOBALS['db'], "admin_query", array($email, $password));

    return $arr = pg_fetch_all($result);
	
}










?>
