<?php 
    require("partials/header.php");

    if(!empty($_POST)) {
        $sql = "INSERT INTO `users`(`email`, `password`) VALUES ('" . $_POST['email'] . "','" . $_POST['password'] . "')";
        if (mysqli_query($conn, $sql)) {
            echo "Ви успішно зареєстровані<br/>";
            header('Refresh: 3; URL=/main.php');
            echo 'Через 5 секунд Ви будете автоматично перенаправлені до додатку!';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>
<main class="form-enter">
  <form action="#" method="POST">
    <img src="/img/logo.svg" alt="" width="70" height="70">
    <h3>Реєстрація</h3>
    <div>
      <input type="email" name="email" placeholder="Ваш email">
    </div>
    <div>
      <input type="password" name="password" placeholder="Пароль">
    </div>
    <div>
      <input type="password" placeholder="Підтвердження паролю">
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Запам’ятати мене
      </label>
    </div>
    
    <button class="btnEnter" type="submit">зареєструватись</button>
  </form>
</main>

<?php 
  require('partials/footer.php');
?>