<?php

$db = mysqli_connect('localhost', 'root', '', 'travel');

if(mysqli_connect_errno())
{
 echo 'Error connect to database ('.mysqli_connect_errno() .'): '.mysqli_connect_error();
 exit();

}
