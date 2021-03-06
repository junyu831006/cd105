<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員登山日誌</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/memberSystem.css">
    <link rel="stylesheet" href="css/memberEquip.css">
    <link rel="stylesheet" href="css/memberJournals.css">
</head>

<body>
    <nav id="headerAll">
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
                <li v-if="web>768"><a href="#"><i class="material-icons">person</i></a></li>
                <li v-if="web<768" id="member">會員專區
                    <ul id="member-child">
                        <li><a class="member-a" href="memberSystem.html">個人中心</a></li>
                        <li><a class="member-a" href="">訂單</a></li>
                        <li><a class="member-a" href="">登山日誌</a></li>
                        <li><a class="member-a" href="">行前裝備</a></li>
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
    </nav>
    <img id="robot" src="img/暫時用的圖/robot-solid.png" alt="機器人">
    <i id="up" class="material-icons">keyboard_arrow_up</i>
    <div class="row">
        <nav class="msNav">
            <h2>會員系統</h2>
            <ul>
                <li><a href="memberSystem.php">個人中心</a></li>
                <li><a href="memberOrders.php">我的訂單</a></li>
                <li><a href="memberJournals.php" id="currentWebsite">登山日誌</a></li>
                <li><a href="memberEquip.php">行前裝備</a></li>
            </ul>
        </nav>

        <div class="msJournals">
            <div class="member-title">
                <h3>我的日誌</h3>
                <a href="memberWriteJo.html">
                    <button class="btn-main-l" id="button_with_pencil">
                        <img src="img/pen.png">
                        <span id="jo_write_text">我要寫日誌</span>
                    </button>
                </a>
            </div>
            <table id="table-myjo">
                <tr id="table-title">
                    <th id="table-title-th">日誌標題</th>
                    <th class="table-title-th">最後編輯時間</th>
                    <th class="table-title-th">發布狀態</th>
                    <th class="table-title-th">編輯</th>
                    <th class="table-title-th">刪除</th>
                </tr>
                <tr>
                    <td class="table-title-td"><a href=""><span>日本-槍岳</span></a></td>
                    <td>2019/1/26</td>
                    <td>已發布</td>
                    <td> <a href="memberWriteJo.html"><img src="img/pen.png" alt=""></a></td>
                    <td> <img src="img/trash.png" alt=""> </td>
                </tr>
                <tr>
                    <td class="table-title-td"><a href=""><span>日本-槍岳</span></a></td>
                    <td>2019/1/26</td>
                    <td>已發布</td>
                    <td> <img src="img/pen.png" alt=""></td>
                    <td> <img src="img/trash.png" alt=""> </td>
                </tr>
                <tr>
                    <td class="table-title-td"><a href=""><span>日本-槍岳</span></a></td>
                    <td>2019/1/26</td>
                    <td>已發布</td>
                    <td> <img src="img/pen.png" alt=""></td>
                    <td> <img src="img/trash.png" alt=""> </td>
                </tr>
                <tr>
                    <td class="table-title-td"><a href=""><span>日本-槍岳</span></a></td>
                    <td>2019/1/26</td>
                    <td>已發布</td>
                    <td> <img src="img/pen.png" alt=""></td>
                    <td> <img src="img/trash.png" alt=""> </td>
                </tr>
            </table>
            <button class="btn">查看更多</button>


            <section id="myjo">
                <h3>收藏日誌</h3>


                <div id=jo__allcards__bg>
                    <main class="jo__allcards">
                        <a name="" href="">
                            <article class="jo__onecard">
                                <img src="img/fuji1.jpeg">
                                <div class="jo__allinfo">
                                    <p class="jo__publish">發表於2018/12/29</p>
                                    <h3>富士山</h3>
                                    <p class="jo__text">1111想飽覽富士山與河口湖全景，一定要搭乘「カチカチ山纜車」前往天上山公園！從「河口湖畔」站搭乘纜車至山頂公園只要三分鐘左右，一路上的景色相當壯觀，天氣好的話據說還能眺望富士急遊樂園。</p>

                                    <div class="icon">
                                        <div class="icon heart">
                                            <i class="material-icons">favorite_border</i>
                                            <span>15</span>
                                        </div>
                                        <div class="icon comment">
                                            <i class="far fa-comment"></i>
                                            <span>9</span>

                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                        <a name="" href="">
                            <article class="jo__onecard">
                                <img src="img/fuji2.jpg">
                                <div class="jo__allinfo">
                                    <p class="jo__publish">發表於2018/12/29</p>
                                    <h3>富士山</h3>
                                    <p class="jo__text">2222想飽覽富士山與河口湖全景，一定要搭乘「カチカチ山纜車」前往天上山公園！從「河口湖畔」站搭乘纜車至山頂公園只要三分鐘左右，一路上的景色相當壯觀，天氣好的話據說還能眺望富士急遊樂園。</p>
                                    <div class="icon">
                                        <div class="icon heart">
                                            <i class="material-icons">favorite_border</i>
                                            <span>15</span>
                                        </div>
                                        <div class="icon comment">
                                            <i class="far fa-comment"></i>
                                            <span>9</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                        <a name="" href="">
                            <article class="jo__onecard">
                                <img src="img/fuji4.jpg">
                                <div class="jo__allinfo">
                                    <p class="jo__publish">發表於2018/12/29</p>
                                    <h3>富士山</h3>
                                    <p class="jo__text">3333想飽覽富士山與河口湖全景，一定要搭乘「カチカチ山纜車」前往天上山公園！從「河口湖畔」站搭乘纜車至山頂公園只要三分鐘左右，一路上的景色相當壯觀，天氣好的話據說還能眺望富士急遊樂園。</p>
                                    <div class="icon">
                                        <div class="icon heart">
                                            <i class="material-icons">favorite_border</i>
                                            <span>15</span>
                                        </div>
                                        <div class="icon comment">
                                            <i class="far fa-comment"></i>
                                            <span>9</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                        <a name="" href="">
                            <article class="jo__onecard">
                                <img src="img/fuji3.jpg">
                                <div class="jo__allinfo">
                                    <p class="jo__publish">發表於2018/12/29</p>
                                    <h3>富士山</h3>
                                    <p class="jo__text">4444想飽覽富士山與河口湖全景，一定要搭乘「カチカチ山纜車」前往天上山公園！從「河口湖畔」站搭乘纜車至山頂公園只要三分鐘左右，一路上的景色相當壯觀，天氣好的話據說還能眺望富士急遊樂園。</p>
                                    <div class="icon">
                                        <div class="icon heart">
                                            <i class="material-icons">favorite_border</i>
                                            <span>15</span>
                                        </div>
                                        <div class="icon comment">
                                            <i class="far fa-comment"></i>
                                            <span>9</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>

                    </main>
                    <button class="btn btn__favjo">查看更多</button>


            </section>
        </div>
    </div>
    <footer id="footer">
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
    </footer>
    <script src="js/header.js"></script>
    <script src="js/vue.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script>
        $('.material-icons').click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).toggleClass('unsetFavorite');
        });
    </script>
=======
</head>

<body>
>>>>>>> 065e6c538967533bf690fb6a7102bf781aa3a733
=======
</head>

<body>
>>>>>>> 065e6c538967533bf690fb6a7102bf781aa3a733
=======
</head>

<body>
>>>>>>> 065e6c538967533bf690fb6a7102bf781aa3a733

</body>

</html>