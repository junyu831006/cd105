<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員訂單</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/memberSystem.css">
    <link rel="stylesheet" href="css/memberEquip.css">
    <link rel="stylesheet" href="css/memberJournals.css">
    <link rel="stylesheet" href="css/memberOrders.css">
</head>

<body>
    <!-- <div class="aaa"> -->
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

        <div class="msJournals">
            <h3>已下訂</h3>
            <div class="all__ordercards">
                <div class="one__ordercard">
                    <div class="orderImg">
                        <img src="img/fuji1.jpeg" alt="">
                    </div>
                    <div class="orderInfo">
                        <div class="orderText">
                            <p>訂單編號:<span>0214589</span></p>
                            <p>訂單狀態:<span>已下訂</span></p>
                        </div>
                        <!-- <span>訂單編號0214589</span> -->
                        <!-- <span>訂單狀態:已下訂</span> -->
                        <h4>日本 - 槍岳、表銀座縱走</h4>
                        <div class="orderText">
                            <p>人數:<span>5</span>人</p>
                            <p>天數:<span>7</span>天</p>
                        </div>
                        <!-- <p>人數:5人</p> -->
                        <!-- <p>天數:7天</p> -->
                        <p class="price">NTD 174,500</p>
                    </div>
                    <!-- <div class="duration">
                        <div> <img src="https://picsum.photos/100/100/?random=1" alt=""></div>
                        <div> <img src="https://picsum.photos/100/100/?random=1" alt=""></div>
                    </div> -->
                    <div class="fourButtons">
                        <div class="img-buttons">
                            <img src="img/trash.png" alt="">
                        </div>
                        <div class="img-buttons">
                            <img src="img/qrcode.png" alt="">
                        </div>
                        <button class="btn">裝備</button>
                        <button class="btn">明細</button>
                    </div>

                </div>
                <div class="one__ordercard">
                    <div class="orderImg">
                        <img src="img/fuji1.jpeg" alt="">
                    </div>
                    <div class="orderInfo">
                        <div class="orderText">
                            <p>訂單編號:<span>0214589</span></p>
                            <p>訂單狀態:<span>已下訂</span></p>
                        </div>
                        <!-- <span>訂單編號0214589</span> -->
                        <!-- <span>訂單狀態:已下訂</span> -->
                        <h4>日本 - 槍岳、表銀座縱走</h4>
                        <div class="orderText">
                            <p>人數:<span>5</span>人</p>
                            <p>天數:<span>7</span>天</p>
                        </div>
                        <!-- <p>人數:5人</p> -->
                        <!-- <p>天數:7天</p> -->
                        <p class="price">NTD 174,500</p>
                    </div>
                    <!-- <div class="duration">
                            <div> <img src="https://picsum.photos/100/100/?random=1" alt=""></div>
                            <div> <img src="https://picsum.photos/100/100/?random=1" alt=""></div>
                        </div> -->
                    <div class="fourButtons">
                        <div class="img-buttons">
                            <img src="img/trash.png" alt="">
                        </div>
                        <div class="img-buttons">
                            <img src="img/qrcode.png" alt="">
                        </div>
                        <button class="btn">裝備</button>
                        <button class="btn">明細</button>
                    </div>

                </div>

            </div>


            <button class="btn">查看更多</button>


            <section id="myjo">
                <h3>歷史訂單</h3>
                <div class="all__ordercards">
                    <!-- <div class="one__ordercard">
                        <div class="orderImg">
                            <img src="img/fuji1.jpeg" alt="">
                        </div>
                        <div class="orderInfo">
                            <span>訂單編號0214510</span>
                            <span>訂單狀態:已完成</span>
                            <h4>日本 - 槍岳、表銀座縱走</h4>
                            <p>人數:5人</p>
                            <p>天數:7天</p>
                            <p class="price">NTD 174,500</p>
                        </div>
                        <div class="fourButtons history">
                            <button class="btn">我要評價</button>
                            <button class="btn">再次預定</button>
                        </div>
    
                    </div> -->
                    <div class="one__ordercard">
                        <div class="orderImg">
                            <img src="img/fuji1.jpeg" alt="">
                        </div>
                        <div class="orderInfo">
                            <div class="orderText">
                                <p>訂單編號:<span>0214589</span></p>
                                <p>訂單狀態:<span>已下訂</span></p>
                            </div>
                            <!-- <span>訂單編號0214589</span> -->
                            <!-- <span>訂單狀態:已下訂</span> -->
                            <h4>日本 - 槍岳、表銀座縱走</h4>
                            <div class="orderText">
                                <p>人數:<span>5</span>人</p>
                                <p>天數:<span>7</span>天</p>
                            </div>
                            <!-- <p>人數:5人</p> -->
                            <!-- <p>天數:7天</p> -->
                            <p class="price">NTD 174,500</p>
                        </div>
                        <div class="fourButtons">
                            <button class="btn btn-1">我要評價</button>
                            <button class="btn btn-1">再次預定</button>
                        </div>

                    </div>
                    <div class="one__ordercard">
                        <div class="orderImg">
                            <img src="img/fuji1.jpeg" alt="">
                        </div>
                        <div class="orderInfo">
                            <div class="orderText">
                                <p>訂單編號:<span>0214589</span></p>
                                <p>訂單狀態:<span>已下訂</span></p>
                            </div>
                            <!-- <span>訂單編號0214589</span> -->
                            <!-- <span>訂單狀態:已下訂</span> -->
                            <h4>日本 - 槍岳、表銀座縱走</h4>
                            <div class="orderText">
                                <p>人數:<span>5</span>人</p>
                                <p>天數:<span>7</span>天</p>
                            </div>
                            <!-- <p>人數:5人</p> -->
                            <!-- <p>天數:7天</p> -->
                            <p class="price">NTD 174,500</p>
                        </div>
                        <div class="fourButtons">
                            <button class="btn btn-1">我要評價</button>
                            <button class="btn btn-1">再次預定</button>
                        </div>

                    </div>

                </div>



                <button class="btn">查看更多</button>


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


    <!-- </div> -->
    <script src="js/header.js"></script>
    <script src="js/vue.js"></script>

</body>
</head>
<body>
    
</body>
</head>
<body>
    
</body>
</html>