<?php
/*   --------THIS FILE CONTAINS DATABASE CONFIGURATION
 ASSUMING YOU ARE RUNNING MYSQL USING USER "ROOT" AND PASSWORD " "------------
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', ' ');
define('DB_NAME', 'login');

//  -----------TRY CONNECTING TO THE DATATBASE---------
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//  ----------CHECK THE CONNECTION---------

if($conn == false){
    dir('Error : cannot connect');
}