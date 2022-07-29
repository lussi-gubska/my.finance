<?php 
    require("partials/header.php");
?>        

<div class="notification">
  <h4> 
    <!-- Если все поля заполненные
    идёт сверка данных заполненных и тех что в базе данных
    если совпадает - происходит авторизизация и начинается сессия пользователя в окне приложения-->
<?php  
  if(!empty($_POST)) {
    $sql = "SELECT * FROM `users` 
    WHERE `email` = '" . $_POST['email'] . "' 
    AND `password` = '" . $_POST['password'] . "'
    ";
    $result = mysqli_query($conn, $sql);
    $user = $result->fetch_assoc();
    if($user) {
      $_SESSION["user_id"] = $user['id'];
      header("Location: /main.php");
    } else {
      $_SESSION["user_id"] = null;
      echo 'Заповніть вірно свої дані, <br> вказані при реєстрації!';
    }
  }
?>
</h4>
</div>


<main class="form-enter">
  <form action="#" method="POST">
    <img src="/img/logo.svg" alt="" width="70" height="70">
    <h3>Вхід до особистого кабінету</h3>
    <a href="http://my.finance/register.php">Досі не в темі? Реєстрація</a>
    <div>
      <input type="email" name="email" placeholder="Ваш email" required>
    </div>
    <div>
      <input type="password" name="password" placeholder="Пароль" required>
    </div>

    <!-- <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me" id="rememberChkBox"> Запам’ятати мене
      </label>
    </div> -->
    
    <button class="btnEnter btnIndex" type="submit">УВІЙТИ</button>
  </form>
</main>

<?php 
  require('partials/footer.php');
?>