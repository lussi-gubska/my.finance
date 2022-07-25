<?php 
    require("partials/header.php");
?>
<?php 
  if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null) {
    echo '<a href="logout.php">Вийти з особистого кабінету</a>';
  } 
?>

<header class="header-main">
  <div class="container">
    <div class="header-body">
      <div class="header-burger">
        <span>бургер)))</span>
      </div>
      <div class="logoButtons">
          <button onclick="location.href='/income.php'" class="btnIncome">Дохід</button>
          <button onclick="location.href='/expence.php'" class="btnExpense">Витрата</button>
          <button onclick="location.href='/remittance.php'" class="btnRemittance">Переказ</button>
          <button onclick="location.href='/analytics.php'" class="btnAnalytics">Аналітика</button>
      </div>
      <div class="logout-icon">
        <span>іконка-виходу</span>
      </div> 
    </div>
  </div>
</header>  

<main class="main-content">
  <div class="container">
    <h4>Фільтр (за весь час, за місяць останій, рік, тільки витрати, тільки дохід, рахунок, категорія) та пошук</h4>
    <h4>Таблиця списком вся (з доходами та витратами та переказами).</h4>
    <p>/чекбокс\ - Дата - Сума - Рахунок/залишок - Категорія - Коментарі</p>

  </div>
</main>

<?php 
  require('partials/footer.php');
?>


<!-- @todo 
пути к кнопкам проверить -->