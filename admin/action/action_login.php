<?php
session_start();

$username = get("username");
$upassword = get("password");
require_once '../process/dao.php';

$exists = checkLogin($username,$upassword);

if($exists>0){
	$_SESSION["user"] = $exists;

	 $user = getUserDetailsById($_SESSION["user"]);
	  foreach ($user as $val) {
	  	$_SESSION["user_level"]=$val['user_level'];
	  	 // $_SESSION["userlevel"]=$ulevel;
	  }
	echo "success";
    // echo $ulevel.'//'.$_SESSION["user"];
}else{
   
    echo "failure";
}
function get($input){
    return($_POST[$input]);
}