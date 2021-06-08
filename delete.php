<?php 

require "model/connexion.php";
require "model/accountModel.php";

deleteAccount($db);
header("Location:index.php");
exit
?>