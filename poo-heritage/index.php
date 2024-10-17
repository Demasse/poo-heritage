<?php

require_once("classes\User.class.php");
require_once("classes\Admin.class.php");



$user1 = new User("Eva", "0000");
$user2 = new User("waffo", "1234");

$admin = new Admin("waffo", "1234", "true");


 echo $user1->getName(). "<br>";  
 echo $user1->getPassword(). "<br>";  
 echo $admin->getName();  

