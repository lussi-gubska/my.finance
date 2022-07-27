<?php 
  require("partials/header.php");

if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null) {
    $_SESSION["user_id"] = null;
    header("Location: /");
}


?>