<?php 
    require("partials/header.php");
?>        

<div class="notification">
  <h4> 
<?php        
  if (isset($_REQUEST['doGo'])) {
    /*Проверяем существует ли у нас такой пользователь в БД*/
    $sql = "SELECT `email` FROM `users` WHERE `email` = '" . $_POST['email'] . "'";
    $result = mysqli_query($conn, $sql);
    $rows = $result->fetch_assoc();
    if($rows > 0) {
      echo 'email: '. $_POST['email'] .' вже зареєстрований!'; 
      } else if ($_REQUEST['password'] !== $_REQUEST['password_rep']) {
        echo 'Пароль не збігається';
        }  

        else if (!empty($_POST)) {
                $sql = "INSERT INTO `users`(`email`, `password`) VALUES ('" . $_POST['email'] . "','" . $_POST['password'] . "')";
                if (mysqli_query($conn, $sql)) {
                  echo "Ви успішно зареєстровані<br/>";
                  header('Refresh: 3; URL=/main.php');
                  echo 'Через 5 секунд Ви будете <br> автоматично перенаправлені до додатку!';
                  } else {
                      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                  }
          mysqli_close($conn);
    }
  }
?>

</h4>
</div>

<main class="form-enter">
  <form action="#" method="POST">
    <img src="/img/logo.svg" alt="" width="70" height="70">
    <h3>Реєстрація</h3>
    <a href="http://my.finance/login.php">Вже зареєстрований? Увійти</a>
    <div>
    <div>
      <input type="email" name="email" placeholder="Ваш email" required>
    </div>
    <div>
      <input type="password" name="password" placeholder="Пароль" required>
    </div>
    <div>
      <input type="password" name="password_rep" placeholder="Підтвердження паролю" required>
    </div>
    <!-- <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me" id="rememberChkBox"> Запам’ятати мене
      </label>
    </div> -->
    
    <button class="btnEnter btnIndex" name="doGo" type="submit">зареєструватись</button>
  </form>
</main>



<?php 
  require('partials/footer.php');
?>