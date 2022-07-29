<?php 
  require("partials/header.php");

  // Конец работы сессии авторизированого пользователя
if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null) {
    $_SESSION["user_id"] = null;
    header("Location: /");
}
?>


<?php 
  require('partials/footer.php');
?>