<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員行前裝備</title>
</head>

<body>
    <!-- <nav id="headerAll">
        <div class="header">
            <ul id="logo">
                <li><a href="index.html"><img src="img/logo.png" alt="logo"></a></li>
                <div id="searchAll">
                    <input type="text" id="search">
                    <i class="material-icons">search</i>
                </div>
            </ul>
            <div id="burger" v-on:click="bur">
                <span class="burger-1" id="burSpan1"></span>
                <span class="burger-2" id="burSpan2"></span>
                <span class="burger-3" id="burSpan3"></span>
            </div>
            <ul id="burgerText">
                <span id="burgerText-X" v-on:click="out"></span>
                <li><a href="#">登山行程</a></li>
                <li><a href="#">客製行程</a></li>
                <li><a href="#">登山日誌</a></li>
                <li><a href="#">登山技巧</a></li>
                <li v-if="web<768"><a href="#">機器人</a></li>
                <li v-if="web>768"><a href="memberSystem.html"><i class="material-icons">person</i></a></li>
                <li v-if="web<768" id="member">會員專區
                    <ul id="member-child">
                        <li><a class="member-a" href="memberSystem.html">個人中心</a></li>
                        <li><a class="member-a" href="memberOrders.html">我的訂單</a></li>
                        <li><a class="member-a" href="memberJournals.html">登山日誌</a></li>
                        <li><a class="member-a" href="memberEquip.html">行前裝備</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="filter">
            <div id="filterList">
                <ul id="filterListLi">
                    <li>亞洲</li>
                    <li>歐洲</li>
                    <li>非洲</li>
                    <li>北美洲</li>
                    <li>南美洲</li>
                    <li>大洋洲</li>
                </ul>
                <div id="filterListImg">
                    <div class="filterListImg-img">
                        <img src="img/mountain資料/玉山/pic_781_14.jpg">
                    </div>
                    <div class="filterListImg-img">
                        <img src="img/mountain資料/少女峰/2000x2000-0-70-a837fa982028e9587ed5abaa0ca6ef0a.jpg">
                    </div>
                    <div class="filterListImg-img">
                        <img src="img/mountain資料/聖母峰/6ba08327f04d2b1fd59e8126e0f8d92a.jpg">
                    </div>
                    <div class="filterListImg-img">
                        <img src="img/mountain資料/富士山/mt-fuji-japan-top-ports.jpg">
                    </div>
                </div>
            </div>
        </div>
    </nav> -->
    <?php
    include_once('header.php');
    ?>
    <img id="robot" src="img/暫時用的圖/robot-solid.png" alt="機器人">
    <i id="up" class="material-icons">keyboard_arrow_up</i>

    <div class="mainContent">
        <div class="row">
            <nav class="msNav">
                <h2>會員系統</h2>
                <ul>
                    <li><a href="memberSystem.php" id="currentWebsite">個人中心</a></li>
                    <li><a href="memberOrders.php">我的訂單</a></li>
                    <li><a href="memberJournals.php">登山日誌</a></li>
                    <li><a href="memberEquip.php">行前裝備</a></li>
                </ul>
            </nav>
            <section class="msProfile">
                <h3>個人中心</h3>
                <div class="row">
                    <div>
                        <div class="msProfile__img">
                            <img src='img/profilePic.jpg' alt='會員照片'>
                        </div>
                        <div class="msProfile__btn">
                            <a href="" class="btn-main-l">修改個人資料</a>
                        </div>
                    </div>
                    <div class="msProfile__text">
                        <ul>
                            <li>暱稱：<span>Meg</span></li>
                            <li>帳號：<span>meg19870807@gmail.com</span></li>
                            <li>紅利點數：<span>180點</span></li>
                        </ul>
                    </div>
                </div>
                <section class="msPoint">
                    <div class="msPoint--use">
                        <h4>紅利折抵辦法</h4>
                        <ul>
                            <li>每10點可於消費時折抵1元。</li>
                            <li>單筆消費能折抵500元。</li>
                        </ul>
                    </div>

                    <div class="msPoint--get">
                        <h4>如何獲取紅利？</h4>
                        <div class="row">
                            <div class="msPoint__item">
                                <p>評價行程</p>
                                <img src='img/tree.png' alt=''>
                            </div>
                            <div class="msPoint__item">
                                <p>撰寫日誌</p>
                                <img src='img/journal1.png' alt=''>
                            </div>
                            <div class="msPoint__item">
                                <p>玩小遊戲</p>
                                <img src='img/mouse.png' alt=''>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>
    <!-- <footer id="footer">
        <img id="footer-img" src="img/暫時用的圖/foo1.png" alt="footer">
        <div id="footer-all">
            <ul>
                <li>關於我們</li>
                <li>聯繫我們</li>
                <li>使用條款</li>
                <li>尋找分店</li>
            </ul>
            <div id="footer-icon">
                <span><i class="fab fa-facebook-f"></i>Facebook</span>
                <span><i class="fab fa-instagram"></i>Instagram</span>
                <span><i class="fab fa-twitter"></i>Twitter</span>
            </div>
            <div id="footer-input">
                <div>
                    <input type="text">
                    <button>訂閱</button>
                </div>
                <span>COPYRIGHT © 2018 Outlander All rights reserved.</span>
            </div>
        </div>
    </footer> -->
    <?php
    include_once('footer.php');
    ?>


    <script src="js/header.js"></script>
    <script src="js/vue.js"></script>
</body>

</html>