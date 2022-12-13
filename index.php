<?php

session_start();

require 'connect.php';

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="header">
        <div class="header-items">
            <label id="logo">Express</label>
            <!-- <img src="./img/logo-aliexpress.svg" alt=""> -->
            <form name="search" method="GET" action="search.php">
                <input class="header-search" type="text" placeholder="Искать на Express" name="query">
                <button class="search-button" type="submit">Поиск</button>
            </form>
            <div class="header-buttons">
                <button class="header-button" onclick="window.location.href='auth.php'">
                    <img src="./img/bx-user.svg" alt="">
                    <label><? if(!empty($_SESSION["login"])) echo $_SESSION["login"]; else echo "Войти"; ?></label>
                </button>
                <!--
                <button class="header-button" onclick="window.location.href='orderList.php'">
                    <img src="./img/bxs-balloon.svg" alt="">
                    <label>Заказы</label>
                </button>
                -->
                <button class="header-button" onclick="window.location.href='shoppingCart.php'">
                    <img src="./img/bx-cart.svg" alt="">
                    <label>Корзина</label>
                </button>
            </div>
        </div>        
    </div>
    <div class="main">
        <div class="categories">
            <b>Категории</b>
            <ul>
                <?
                $categories = mysqli_query($conn,"SELECT * FROM `category`");
                $categories = mysqli_fetch_all($categories);
                foreach ($categories as $category) {
                    echo '
                    <li><a href="catalog.php?category_id=' . $category[0] . '&category_name=' . $category[1] . '">' . $category[1] . '</a></li>
                    ';
                }
                ?>
            </ul>
        </div>
        <div class="items-container">
            
            <?        
            $items = mysqli_query($conn,"SELECT * FROM `item`");
			$items = mysqli_fetch_all($items);
             foreach ($items as $item)  {
                echo '
                <a class="item-wrapper" href="item.php?id=' . $item[0] . '&name=' . $item[1] . '&img=' . $item[2] . '&price=' . $item[3] . '">
                    <div class="item">
                        <img class="item-img" src="./img/items/' . $item[2] .'" />
                        <label class="item-name">' . $item[1] . '</label>
                        <label class="item-price">' . $item[3] . '₽</label>
                    </div> 
                </a>   
                ';
            }
            ?>
        </div>
    </div>
    <!--
    <div class="footer">
        <div class="footer-container">
            <div class="footer-item">
                <ul>
                    <b>Покупателям</b>
                    <li>Заказы и оплата</li>
                    <li>Доставка</li>
                    <li>Защита покупателя</li>
                    <li>Поддержка</li>
                    <li>Споры и жалобы</li>
                    <li>Купоны Express</li>
                </ul>
            </div>
            <div class="footer-item">
                <ul>
                    <b>Покупателям</b>
                    <li>Заказы и оплата</li>
                    <li>Доставка</li>
                    <li>Защита покупателя</li>
                    <li>Поддержка</li>
                    <li>Споры и жалобы</li>
                    <li>Купоны Express</li>
                </ul>
            </div>
            <div class="footer-item">
                <ul>
                    <b>Покупателям</b>
                    <li>Заказы и оплата</li>
                    <li>Доставка</li>
                    <li>Защита покупателя</li>
                    <li>Поддержка</li>
                    <li>Споры и жалобы</li>
                    <li>Купоны Express</li>
                </ul>
            </div>
            <div class="footer-item">
                <ul>
                    <b>Покупателям</b>
                    <li>Заказы и оплата</li>
                    <li>Доставка</li>
                    <li>Защита покупателя</li>
                    <li>Поддержка</li>
                    <li>Споры и жалобы</li>
                    <li>Купоны Express</li>
                </ul>
            </div>
        </div>
    </div>
    -->
</body>
</html>