<?php
require ($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>
<link rel="stylesheet" href="/css/mainl.css">
<div class="main">
    <div class="container">
        <header class="main-header">
            <div class="header-container">
                <div class="header-logo">
                    <img src="/img/logo.svg" alt="">
                </div>
                <div class="calculations">
                   
                    <button class="income">
                        <span class="myButton-label">
                            <div class="union">
                                <img src="/img/plus.svg" alt="union">
                                <p>Дохід</p>
                            </div>
                        </span>
                    
                    </button>
                        <button class="consumption">
                        <span class="myButton-label">
                            <div class="stroke">
                                <img src="/img/minus.svg" alt="stroke">
                                <p>Витрата</p>
                            </div>
                        </span>
                        
                    </button>
                        <button class="translation">
                        <span class="myButton-label">
                            <div class="transfer">
                                <img src="/img/perekaz.svg" alt="transfer">
                            <p>Переказ</p>
                        </div>
                    </span>
                        </button>
                </div>
                <div class="cabinet">
                    <img src="/img/logout.svg" alt="logout">
        
                </div>
            </div>
        </header>
        <div class="body-container">
            <div class="fin-left">
                <div class="fin-left-container">
                    <p class="text-amount">Всього на рахунках</p>
                    <p class="amount">₴ 0
                        <span style="font-size: 16px;">.0</span></p>
                
                <hr>
                    <div class="check">
                        <p class="check-text">Мої рахунки</p>
                        <p class="check-edit" >Редагувати</p>
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
                        <svg class="svg-trg"><path d="M7 10l5 5 5-5z"></path>
                            
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
                        <div></div>
                    </div>
                </div>












            </div>
        
        
        
        
        
        
        </div>
</div>
</div>





































<?php
require ($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>
