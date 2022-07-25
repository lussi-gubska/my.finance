<?php 
    require("partials/header.php");
?>
<header class="header-index">
        <div class="container">
            <div class="headerLogo">
                <img class="logo" src="img/logo.svg">
                <div class="logoWords">
                    <h4>MY FINANCE</h4>
                    <p>Це так просто!</p>
                </div>
            </div>
            <div class="logoButtons">
                <button onclick="location.href='/login.php'" class="btnEnter">Вхід</button>
                <button onclick="location.href='/register.php'" class="btnAddUser">Реєстрація</button>
            </div>
            
        </div>
</header>    
<main>
    <section class="main-picture">
        <div class="container">
            <img src="img/image.png">
        </div>
    </section>
    <section class="main-about">
        <div class="container">
            <h1>MY FINANCE</h1>
            <h2>Он-лайн помічник ведення особистого фінансового обліку</h2>
            <h3>Це так просто – керувати своїми грошима. Спробуй!</h3>
            <div class="advantages-container">
                <div class="advantage">
                    <div class="advantage-title">
                        <span class="overlay"></span>
                        <h4>Доступ 24 години на добу!</h4>
                    </div>
                    <div class="advantage-description">
                        <p>Немає потреби сидіти над стопкою чеків в кінці тижня, коли нарешті дісталися до комп’ютера, намагаючись пригадати, що і
                        де було витрачено.</p>
                    </div>
                </div>
                <div class="advantage">
                    <div class="advantage-title">
                        <span class="overlay"></span>
                        <h4>Аналітика</h4>
                    </div>
                    <div class="advantage-description">
                        <p>Гроші надходять, але куди вони зникають? Переглядай свої фінансові потоки за поточний місяць або триваліший період часу.</p>
                    </div>
                </div>
                <div class="advantage">
                    <div class="advantage-title">
                        <span class="overlay"></span>
                        <h4>Практичність</h4>
                    </div>
                    <div class="advantage-description">
                        <p>Коротка інформація про рахунки (картки, рахунки та готівка) зібрана на єдиному екрані, дозволяючи одним поглядом охопити
                        загальну картину.</p>
                    </div>
                </div>
                <div class="advantage">
                    <div class="advantage-title">
                        <span class="overlay"></span>
                        <h4>Онлайн формат</h4>
                    </div>
                    <div class="advantage-description">
                        <p>Немає потреби завантажувати додатки. Просто заходь в особистий кабінет і керуй своїми фінансами.</p>
                    </div>
                </div>

                <div class="advantage">
                    <div class="advantage-title">
                        <span class="overlay"></span>
                        <h4>Мультиплатформенність</h4>
                    </div>
                    <div class="advantage-description">
                        <p>Заходь з будь-якого пристрою!</p>
                    </div>
                </div>
                <div class="advantage">
                    <div class="advantage-title">
                        <span class="overlay"></span>
                        <h4>Інтуїтивно зрозумілий інтерфейс</h4>
                    </div>
                    <div class="advantage-description">
                        <p>Підійде навіть тим, хто далекий від комп'ютерного світу.</p>
                    </div>
                </div>
                
            </div>

        </div>
    </section>
</main>

<?php 
  require('partials/footer.php');
?>


