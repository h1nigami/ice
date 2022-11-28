
   
<!DOCTYPE html>
<html lang="ru">

<head>

    <?
    require 'bd.php';
    ?>
    <meta charset="utf-8">
    <!-- <meta http-equiv="Content-Type" content="text/html;"> -->
    <meta name="format-detection" content="telephone=no">
    <!-- <meta http-equiv="x-rim-auto-match" content="none"> -->
    <meta name="viewport" content="user-scalable=yes, width=device-width">
    <title>Scrooge China | Пополни свой аккаунт buff163 через нас.</title>
    <meta name="keywords" content="">
    <meta name="description" content="Scrooge China - Это сервис который поможем вам пополнить свой аккаунт Buff.163 в считанные секунды, по самому выгодному курс и без потерь. Публичность заключается в полной прозрачности, предсказуемости и автоматизированности работы.">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/favicon.png">
    <link rel="canonical" href=”https://betterattack.github.io”>
    <script async src="js/tag.js"></script>
    <script type="text/javascript" async src="js/insert.js"></script>
    <script src="js/html5shiv.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css" crossorigin="anonymous">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/slick.css" rel="stylesheet" type="text/css">
    <link href="css/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css">
    <link href="css/nouislider.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/mobile.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/hyper.css">
    <script type="text/javascript" async src="https://vk.com/js/api/openapi.js?169"></script>
    <script type="text/javascript" async src="js/embed.js"></script>
</head>

<body>
<?php if (isset($_SESSION['logged_user']) ) : ?>
<div id="preloader">
    <div class="inner">
    </div>
</div>
<div class="main" id="main">
    <header>
        <div class="container">
            <div class="header-blocks">
                <a href="/" class="logo"><img src="fonts/logo.svg" style="width: 218px;"></a>
                <div class="header-right">
                    <nav class="main-menu">
                        <div class="top-block">
                            <div class="logo">
                                <img src="fonts/logo-white.svg" style="width: 218px;" alt="Scrooge">
                            </div>
                            <button class="mob-nav-close"></button>
                        </div>


                        <div class="btn-login-group">
                        <?php if (isset($_SESSION['logged_user'])) : ?>
                                    <a data-toggle="modal" class="btn btn-login">
                                        <i class="far fa-user-circle"></i>
                                        Чат
                                    </a>
                                </br>
                                <?php else : ?>
                                    <a href="/login.php" class="btn btn-login">
                                        <i class="far fa-sign-in-alt"></i>
                                        Вход
                                    </a>
                                    <a href="/registration.php" class="btn btn-login">
                                        <i class="far fa-user-plus"></i>
                                        Регистрация
                                    </a>
                                <?php endif; ?>
                        </div>
                        <ul class="menu-items">
                            <li class="ico-home"><a href="/" class="ico-home">Главная</a></li>
                            <li><a href="/reviews.php" class="ico-testimonials">Отзывы</a></li>
                            <li><a href="/index.php#faqq" class="ico-faq">FAQ</a></li>
                            <li><a href="#contacts" class="ico-contacts smoothScroll">Контакты</a></li>
                        </ul>

                        <div class="contacts">
                            <div class="item">
                                <i class="ico-email"></i>
                                <a href="mailto:support@scrooge-china.com">support@scrooge-china.com</a>
                            </div>
                        </div>
                    </nav>

                    <button class="btn btn-login">
                    <?php if (isset($_SESSION['logged_user'])) : ?>
                                    <a data-toggle="modal" data-target="#settingmodal">
                                        <i class="far fa-user-circle"></i>
                                        Чат
                                    </a>
                                </br>
                                <?php else : ?>
                                    <a href="/login.php" class="btn btn-login">
                                        <i class="far fa-sign-in-alt"></i>
                                        Вход
                                    </a>
                                    <a href="/registration.php" class="btn btn-login">
                                        <i class="far fa-user-plus"></i>
                                        Регистрация
                                    </a>
                                <?php endif; ?>
                    </button>
                    <a href="#" class="mob-nav">
                        <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0 1C0 0.447715 0.447715 0 1 0H19C19.5523 0 20 0.447715 20 1C20 1.55228 19.5523 2 19 2H1C0.447715 2 0 1.55228 0 1ZM0 7C0 6.44772 0.447715 6 1 6H19C19.5523 6 20 6.44772 20 7C20 7.55228 19.5523 8 19 8H1C0.447715 8 0 7.55228 0 7ZM1 12C0.447715 12 0 12.4477 0 13C0 13.5523 0.447715 14 1 14H19C19.5523 14 20 13.5523 20 13C20 12.4477 19.5523 12 19 12H1Z"
                                  fill="black"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    <div class="header-fix">
        <div class="container">
            <div class="header-blocks">
                <a href="/" class="logo"><img src="fonts/logo-white.svg" style="width: 218px;"></a>
    
                <div class="header-right">
                    <nav>
                        <ul>
                            <li class="ico-home"><a href="/" class="ico-home">Главная</a></li>
                            <li><a href="reviews.php" class="ico-testimonials">Отзывы</a></li>
                            <li><a href="index.php#faqq" class="ico-faq">FAQ</a></li>
                            <li><a href="#contacts" class="ico-contacts smoothScroll">Контакты</a></li>
                        </ul>
                    </nav>
                    <button class="btn btn-login">
                    <?php if (isset($_SESSION['logged_user'])) : ?>
                                    <a data-toggle="modal" data-target="#settingmodal">
                                        <i class="far fa-user-circle"></i>
                                        Чат
                                    </a>
                                </br>
                                <?php else : ?>
                                    <a href="/login.php" class="btn btn-login">
                                        <i class="far fa-sign-in-alt"></i>
                                        Вход
                                    </a>
                                    <a href="/registration.php" class="btn btn-login">
                                        <i class="far fa-user-plus"></i>
                                        Регистрация
                                    </a>
                                <?php endif; ?>
                    </button>
                    <a href="#" class="mob-nav">
                        <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0 1C0 0.447715 0.447715 0 1 0H19C19.5523 0 20 0.447715 20 1C20 1.55228 19.5523 2 19 2H1C0.447715 2 0 1.55228 0 1ZM0 7C0 6.44772 0.447715 6 1 6H19C19.5523 6 20 6.44772 20 7C20 7.55228 19.5523 8 19 8H1C0.447715 8 0 7.55228 0 7ZM1 12C0.447715 12 0 12.4477 0 13C0 13.5523 0.447715 14 1 14H19C19.5523 14 20 13.5523 20 13C20 12.4477 19.5523 12 19 12H1Z"
                                  fill="black"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="calc" id="calc">
        <div class="container">
            <div class="calc-blocks">
                <div class="calc-content wow fadeInLeft">
                    <div class="calc-title">Калькулятор<br> пополнения</div>
                    <div class="calc-text">Посчитайте, сколько<br> вы хотите получить на баланс</div>
                    <?php if (isset($_SESSION['logged_user'] ) and $data['privelegies'==0]) : ?>
                    <div class="present-btn"><a href="/chatl/index.php" class="btn btn3">Оплатить</a></div>
                    <?php else : ?>
                        <div class="present-btn"><a href="/login.php" class="btn btn3">Оплатить</a></div>
                        <?php endif; ?>
                </div>
                <div class="calc-item wow fadeInRight">
                    <div class="calc-item-title">Способ оплаты</div>
                    <div class="payment-method-inp-block">
                    <select class="payment-method">
                        <option value="QIWI">QIWI</option>
                        <option value="СБП(Тинькофф)">Tinkoff(СБП)</option>
                        <option value="BTC">BTC</option>
                        <option value="ETH">ETH</option>
                        <option value="USDt">USDt</option>
                        <option value="other">Другая криптовалюта</option>
                       </select>
                    </div>
                    <script async type="text/javascript" src="js/calculator.js"></script>
                    <div class="calc-item-title">Сумма пополнения</div>
                    <div class="calc-item-inp-block">
                        <input type="text" oninput="calculator(this.value)" class="calc-item-inp" value="100">
                        <div class="calc-item-inp-text" >¥</div>
                    </div>
                    <div class="calc-item-slider">
                        <div id="calc_slider"></div>
                    </div>
                    <div class="calc-item-info-blocks">
                        <div class="calc-item-info">
                            <div class="calc-item-info-block green">
                                <div class="calc-item-info-block-title">Курс</div>
                                <div class="calc-item-info-block-text" id="kurs">10 ₽<span class="sum2">=</span> 1¥ </div>
                            </div>
                            <div class="calc-item-info-block">
                                <div class="calc-item-info-block-title">Вы получите</div>
                                <div class="calc-item-info-block-text"><span id="get_calculator" class="sum1">0</span><i>₽</i></div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="present-btn"><a href="/replenish.php" class="btn btn3">Пополнить сейчас</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="steps features" id="features">
        <div class="container">
            <div class="steps-blocks">
                <div class="steps-image wow fadeInLeft"><img src="images/Rocket2.webp" alt></div>
                <div class="steps-content wow fadeInRight">
                    <div class="steps-title">Как это работает?</div>
                    <div class="steps-item">
                        <div class="steps-number">1.</div>
                        <div class="steps-text">Вы выбираете комфортный для вас способ и сумму.</div>
                    </div>
                    <div class="steps-item">
                        <div class="steps-number">2.</div>
                        <div class="steps-text">Оплачиваете ее.</div>
                    </div>
                    <div class="steps-item">
                        <div class="steps-number">3.</div>
                        <div class="steps-text">Попадаете в чат с модератором, он попросит вас скинуть QR-код для пополнения Buff.163.com</div>
                    </div>
                    <div class="steps-item">
                        <div class="steps-number">4.</div>
                        <div class="steps-text">Ожидаете пару мгновений.</div>
                    </div>
                    <div class="steps-item last">
                        <div class="steps-number">5.</div>
                        <div class="steps-text">Деньги у вас на балансе.</div>
                    </div>
                    <a href="#calc" class="btn btn3" class="smoothScroll">Пополни прямо сейчас</a>
                </div>
            </div>
        </div>
    </div>

<div class="present" id="present">
                <div class="container">
                    <div class="present-block">
                        <div class="present-content wow fadeInLeft">
                            <div class="present-title">Видео-инструкция<br> </div>
                            <div class="present-btn"><a href="https://www.youtube.com/watch?v=w3EFHZCTqk0" data-fancybox class="btn btn3">Смотреть сейчас</a></div>
                        </div>
                        <div class="present-video wow fadeInRight"><a href="https://www.youtube.com/watch?v=w3EFHZCTqk0" data-fancybox></a></div>
                    </div>
                </div>
            </div>

</div>

<footer>
    <div class="container">
        <div class="footer-blocks">
            <div class="footer-block">
                <div class="footer-title">Контакты</div>
                <p>Telegram: <a href="https://t.me/mcduck12">@mcduck12</a></p>
                <p>E-mail: <a href="mailto:support@scrooge-china.com" class="font-fix">support@scrooge-china.com</a></p>

            </div>
            <div class="footer-nav">
                <div class="footer-title">О нашей работе
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.77701 5.30779L0.450621 0.500689C0.276869 0.307633 0.413877 0 0.673609 0H9.32639C9.58612 0 9.72313 0.307633 9.54938 0.50069L5.22299 5.30779C5.10382 5.4402 4.89618 5.4402 4.77701 5.30779Z"
                              fill="white"/>
                    </svg>
                </div>
                <ul>
                    <li><a href="#how" class="smoothScroll">Как мы работаем?</a></li>
                    <li><a href="#steps" class="smoothScroll">Как пополнить Buff.163?</a></li>
                    <li><a href="#calc" class="smoothScroll">Калькулятор пополнения</a></li>
                    <li><a href="#features" class="smoothScroll">Преимущества работы с нами</a></li>
                </ul>
            </div>
            <div class="footer-nav">
                <div class="footer-title">Информация
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.77701 5.30779L0.450621 0.500689C0.276869 0.307633 0.413877 0 0.673609 0H9.32639C9.58612 0 9.72313 0.307633 9.54938 0.50069L5.22299 5.30779C5.10382 5.4402 4.89618 5.4402 4.77701 5.30779Z"
                              fill="white"/>
                    </svg>
                </div>
                <ul>
                    <li><a href="/?page=rules">Клиентское соглашение</a></li>
                    <li><a href="/account/login/">Личный кабинет</a></li>
                </ul>
            </div>
            <div class="footer-nav">
                <div class="footer-title">Помощь
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.77701 5.30779L0.450621 0.500689C0.276869 0.307633 0.413877 0 0.673609 0H9.32639C9.58612 0 9.72313 0.307633 9.54938 0.50069L5.22299 5.30779C5.10382 5.4402 4.89618 5.4402 4.77701 5.30779Z"
                              fill="white"/>
                    </svg>
                </div>
                <ul>
                    <li><a href="#calc" class="smoothScroll">Рассчитать</a></li>
                    <li><a href="/reviews.php">Отзывы</a></li>
                    <li><a href="/index.php#faqq">FAQ</a></li>
                    <li><a href="#contacts" class="smoothScroll">Контакты</a></li>
                </ul>
            </div>


        </div>
    </div>
</footer>
</div>

<a href="#main" class="totop smoothScroll">
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd"
              d="M8 1C8.55228 1 9 1.44772 9 2V15C9 15.5523 8.55228 16 8 16C7.44772 16 7 15.5523 7 15V2C7 1.44772 7.44772 1 8 1Z"
              fill="white"/>
        <path fill-rule="evenodd" clip-rule="evenodd"
              d="M7.29289 0.292893C7.68342 -0.0976311 8.31658 -0.0976311 8.70711 0.292893L15.7071 7.29289C16.0976 7.68342 16.0976 8.31658 15.7071 8.70711C15.3166 9.09763 14.6834 9.09763 14.2929 8.70711L8 2.41421L1.70711 8.70711C1.31658 9.09763 0.683417 9.09763 0.292893 8.70711C-0.0976311 8.31658 -0.0976311 7.68342 0.292893 7.29289L7.29289 0.292893Z"
              fill="white"/>
    </svg>
    <p>Вверх</p></a>


<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/maskinput.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.spincrement.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/index.js"></script>
<?php else : ?>
   <? echo '<div> Эта страница доступна только авторизованным пользователям. Перейдите к <a href="/login.php">авторизации<a/></div>';?>
    <?php endif;?>
</body>

</html>
