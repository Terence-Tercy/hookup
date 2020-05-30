<?php
/**
 * @Author: Your name
 * @Date:   2020-05-28 17:56:31
 * @Last Modified by:   Your name
 * @Last Modified time: 2020-05-29 05:07:48
 */
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "quick-works";

$conn = new mysqli ($dbhost, $dbuser, $dbpass, $db);
//check connection

if($conn->connect_error){
    echo "connection failed";
}






?>