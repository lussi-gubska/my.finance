<?php 
    require("partials/header.php");
?>
<main class="content-form-enter">
    <div class="container">

        <div class="form-enter">
            <form action="#" method="POST">
                <img src="/img/logo.svg" alt="" width="70" height="70">
                <h3>Нова витрата</h3>
                <div>
                    <select class="form-select" name="" id="" required>
                        <option value="">Звідки витрачено кошти?</option>
                        <option value="">Готівка</option>
                        <option value="">Картка</option>
                    </select>
                    <div class="invalid-feedback">
                        Будь-ласка оберіть вірний пункт.
                    </div>
                </div>

                <div>
                <input type="sum" name="" placeholder="Яка сума (грн)?">
                </div>

                <div>
                    <select class="form-select" name="" id="" required>
                        <option value="">Яка категорія витрати?</option>
                        <option value="">Продукти</option>
                        <option value="">Розваги</option>
                    </select>
                    <div class="invalid-feedback">
                        Будь-ласка оберіть вірний пункт.
                    </div>
                </div>

                <div>
                <input type="date" id="date" name="date"/>
                </div>
                
                <button class="btnEnter" type="submit">Додати витрату</button>
            </form>
        </div>



    </div>
</main>

<?php 
  require('partials/footer.php');
?>



<!-- @todo 
фільтр
invalid-feedback зробити 
кнопка натискання - внесення та повернення до головного екрану додатка, а не на головний екран-->