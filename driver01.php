<?php
// ref1: https://www.w3schools.com/php/func_var_isset.asp
// ref2: https://www.w3schools.com/php/func_mysqli_fetch_all.asp

$ROOT_PATH = '/home/mrh/www/http_public/fauxproj';
$path = $ROOT_PATH."/includes/db.connect.php";
echo $path;
include_once($path);

//if we did not die()!

//check CONSTS exist...
// if (defined(DB_DBASE)){
//     echo "<p>"."Database: ".DB_DBASE."</p>";
// } else{
//     echo "<p>"."DB_DBASE is not defined!"."</p>";
// }

// if (defined(DB_USERNAME)){
//     echo "<p>"."Username: ".DB_USERNAME."</p>";
// } else{
//     echo "<p>"."DB_USERNAME is not defined!"."</p>";
// }

// if (isset($mysqli)){
//     echo "<hr> driver01.php <hr>";
//     echo "<p>"."mysqli is ..."."<p>";
//     echo var_dump($mysqli);
// } else{
//     die("$mysqli is null?");
// }

/*
if (! isset($mysqli)) {
   // connection may be closed() .. try again
   $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DBASE);
   
   if ($mysqli === false){
    die("DBASE CONNECTION ERROR! ".$mysli->connect_error);
}    
*/
// we did not die so run this code..  



//run simple select query on Users...
echo "<hr> driver01.php <hr>";
echo "<p> running query now ...</p>";

$sql = "select u_id, email from Users";
$data = $mysqli-> query($sql);

//ref : https://www.w3schools.com/php/php_mysql_select.asp
if ($data->num_rows > 0){
    echo "<p> There is Users data...</p>";
    echo "<p> u_id  email </p>";
    while ($row = $data->fetch_assoc()){
        echo "<p>".$row['u_id']."  ".$row['email']."</p>";
        

    };
    
    echo "<Hr>";
}

//echo var_dump($data);
