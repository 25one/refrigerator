<?php

namespace RefrigeratorModel;

class RefrigeratorModel
{

public $link;

public function __construct()
{
require_once 'config/db.php';
$link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (mysqli_connect_errno())
{
    echo "Error accessing to DataBase: ".mysqli_connect_error();
    exit();
}
mysqli_query($link, "set names utf8");
$this->link=$link;
}

public function queryValidate($name, $datebuy, $datemake, $datelimit)
{
$r="/\d{4}-\d{2}-\d{2}/";
if($name == '' || !preg_match($r, $datebuy) || !preg_match($r, $datemake) || !preg_match($r, $datelimit))
{
   return false;
}
else
{
   return true; 
}
}

public function queryDB($query)
{
$result = mysqli_query($this->link, $query);
while($row = mysqli_fetch_assoc($result))
{
    $rowArray[] = $row;
}
return $rowArray;
}

}



