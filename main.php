<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');



?>
<link rel="stylesheet" href="/css/mainl.css">
<div class="main">
    <div class="container">
        <header class="main-header">
            <div class="header-container">
                <div class="burger">
                    <img src="img/burger-menu.svg" alt="menu">
                </div>
                <div class="burger-left">
                    <div class="fin-left">
                        <span class="my-label">
                            <svg class="mdi-icon " width="14" height="14" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"></path>
                            </svg>
                        </span>
                        <div class="fin-left-container">
                            <p class="text-amount">Всього на рахунках</p>
                            <p class="amount">₴ 0
                                <span style="font-size: 16px;">.0</span>
                            </p>

                            <hr>
                            <div class="check">
                                <p class="check-text">Мої рахунки</p>
                                <p class="check-edit">Редагувати</p>
                            </div>
                            <div class="check-cont">
                                <div class="check-name">
                                    <div class="check-name-text">
                                        <p>Банківський рахунок</p>
                                    </div>
                                </div>
                                <div class="check-money">
                                    <div class="check-money-1">₴ 0<span style="font-size: 10px;">.0</span>
                                    </div>
                                </div>
                            </div>
                            <div class="check-cont">
                                <div class="check-name">
                                    <div class="check-name-text">
                                        <p>Готівка</p>
                                    </div>
                                </div>
                                <div class="check-money">
                                    <div class="check-money-1">₴ 0<span style="font-size: 10px;">.0</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="total">
                                <p class="total-name">Всього на рахунках</p>
                                <p class="total-amount">₴ 0<span style="font-size: 10px;">.0</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-logo">
                    <img src="/img/logo.svg" alt="">
                </div>
                <div class="calculations">

                    <button id="myBtnplus" class="income">
                        <span class="myButton-label">
                            <div class="union">
                                <img src="/img/plus.svg" alt="union">
                                <p>Дохід</p>

                            </div>
                        </span>

                    </button>
                    <button id="myBtnminus" class="consumption">
                        <span class="myButton-label">
                            <div class="stroke">
                                <img src="/img/minus.svg" alt="stroke">
                                <p>Витрата</p>
                            </div>
                        </span>

                    </button>
                    <button id="myBtnperekaz" class="translation">
                        <span class="myButton-label">
                            <div class="transfer">
                                <img src="/img/perekaz.svg" alt="transfer">
                                <p>Переказ</p>
                            </div>
                        </span>
                    </button>
                </div>
                <div class="cabinet">
                    <a href="logout.php"><img src="/img/logout.svg" alt="logout"></a>

                </div>
            </div>
        </header>
        <div class="body-container">
            <div class="fin-left">
                <span class="my-label">
                    <svg class="mdi-icon " width="14" height="14" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"></path>
                    </svg>
                </span>
                <div class="fin-left-container">
                    <p class="text-amount">Всього на рахунках</p>
                    <p class="amount">₴ 0
                        <span style="font-size: 16px;">.0</span>
                    </p>

                    <hr>
                    <div class="check">
                        <p class="check-text">Мої рахунки</p>
                        <p class="check-edit">Редагувати</p>
                    </div>
                    <div class="check-cont">
                        <div class="check-name">
                            <div class="check-name-text">
                                <p>Банківський рахунок</p>
                            </div>
                        </div>
                        <div class="check-money">
                            <div class="check-money-1">₴ 0<span style="font-size: 10px;">.0</span>
                            </div>
                        </div>
                    </div>
                    <div class="check-cont">
                        <div class="check-name">
                            <div class="check-name-text">
                                <p>Готівка</p>
                            </div>
                        </div>
                        <div class="check-money">
                            <div class="check-money-1">₴ 0<span style="font-size: 10px;">.0</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="total">
                        <p class="total-name">Всього на рахунках</p>
                        <p class="total-amount">₴ 0<span style="font-size: 10px;">.0</span></p>
                    </div>
                </div>
            </div>
            <div class="fin-right">
                <div class="nav-header">
                    <div class="header-list">
                        <div class="list-platezh">
                            <p>Платежі</p>
                        </div>
                        <div class="list-analitic">
                            <p>Аналітика</p>
                        </div>
                    </div>
                </div>
                <div class="period">
                    <button class="btn-list-period">
                        <span class="btn-label">
                            <p>За весь час</p>
                            <svg class="svg-trg">
                                <path d="M7 10l5 5 5-5z"></path>

                            </svg>
                        </span>
                    </button>
                    <div class="find">
                        <div class="placeholder">
                            <div class="find-container">
                                <img src="/img/search.svg" alt="search">
                                <p>Пошук по рахунках, клієнтах, коментарях</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body-table">
                    <div class="header-table">
                        <div class="list-name">
                            <p>Дата</p>
                        </div>
                        <div class="list-name">
                            <p>Сумма</p>
                        </div>
                        <div class="list-name">
                            <p>Рахунок/залишок</p>
                        </div>
                        <div class="list-name">
                            <p>Категорія</p>
                        </div>
                    </div>
                    <div class="change-data">
                        <?php
                        $sql = "SELECT * FROM `users`";
                        $result = $conn->query($sql);
                        $log_usr = $_SESSION["user_id"]; 
                        echo $log_usr;
                        echo '<pre>';
                        print_r($result->fetch_assoc()) 
                        //echo var_dump(get_object_vars($id_sess))
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div id="myModalplus" class="modal">
        <div class="modal-content modal-plus">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Новий дохід</h2>
            </div>
            <div class="modal-body">
                <div class="row-one">
                    <input class="row-account" type="search" name="account" placeholder="на рахунок" required>
                </div>
                <div class="row-two">
                    <input class="row-sum" type="number" step="0.01" name="amountpl" placeholder="Сума" required>
                    <div class="row-val">
                        <p>UAN (₴)</p>
                    </div>
                </div>
                <div class="row-three">
                    <p>Категорія</p>
                </div>
                <div class="row-calendar">
                    <p>Дата</p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-plus">Додати дохід</button>
            </div>
        </div>
    </div>

    <div id="myModalminus" class="modal">
        <div class="modal-content modal-minus">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Нова витрата</h2>
            </div>
            <div class="modal-body">
                <div class="row-one">
                    <p>з рахунку</p>
                </div>
                <div class="row-two">
                    <div class="row-sum">
                        <p>Сума</p>
                    </div>
                    <div class="row-val">
                        <p>UAN (₴)</p>
                    </div>
                </div>
                <div class="row-three">
                    <p>Категорія</p>
                </div>
                <div class="row-calendar">
                    <p>Дата</p>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn-minus">Додати витрату</button>
            </div>
        </div>
    </div>

    <div id="myModalperevod" class="modal">
        <div class="modal-content modal-minus">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Переказ</h2>
            </div>
            <div class="modal-body">
                <div class="row-one">
                    <p>з рахунка</p>
                </div>
                <div class="row-one">
                    <p>на рахунок</p>
                </div>
                <div class="row-two">
                    <div class="row-sum">
                        <p>Сума</p>
                    </div>
                    <div class="row-val">
                        <p>UAN (₴)</p>
                    </div>
                </div>
                <div class="row-three">
                    <p>Категорія</p>
                </div>
                <div class="row-calendar">
                    <p>Дата</p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-perekaz">Переказати</button>
            </div>
        </div>
    </div>


</div>


<?php
require ($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>


































<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>