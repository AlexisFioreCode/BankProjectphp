<?php 

require "model/accountManager.php";

$account = new AccountManager();
$account->deleteAccount($_GET["index"]);
header("Location:index.php");
exit
?>