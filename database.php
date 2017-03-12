<?php
/**
 * Created by PhpStorm.
 * User: shilisia
 * Date: 3/2/17
 * Time: 3:05 PM
 */

//Create connection credentials
$db_host ='localhost';
$db_name='quizzer';
$db_user='root';
$db_pass='2017';

//create mysqli object
$mysqli=new mysqli($db_host,$db_user,$db_pass,$db_name);

//Error Handler
if($mysqli->connect_error){
    printf("Connection Failed: %s\n",$mysqli->connect_error);
    exit();
}
