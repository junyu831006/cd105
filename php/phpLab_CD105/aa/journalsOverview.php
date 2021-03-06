<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/journalsOverview.css">


    <title>日誌總覽</title>
</head>

<body>
        <?php
            include_once('header.php')
        ?>
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
                <li v-if="web>768"><a href="#"><i class="material-icons">person</i></a></li>
                <li v-if="web<768" id="member">會員專區
                    <ul id="member-child">
                        <li><a class="member-a" href="#">個人中心</a></li>
                        <li><a class="member-a" href="#">訂單</a></li>
                        <li><a class="member-a" href="#">登山日誌</a></li>
                        <li><a class="member-a" href="#">行前裝備</a></li>
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
    <img id="robot" src="img/暫時用的圖/robot-solid.png" alt="機器人">
    <i id="up" class="material-icons">keyboard_arrow_up</i>
    <div class="jo__wrap">
        <!-- 第一屏世界地圖 -->
        <div class="jo__map">
            <div class="bg__map">
                <img src="img/map.png" alt="日誌總覽地圖">
            </div>
            <div class="many__mounts">
                <a href="#jo__results" class="imgMount">
                    <div class="row">
                        <img src="img/mount2.png" alt="富士山" class="imgMount" id="img-fuji">
                        <span id="text-fuji">富士山</span>
                    </div>
                </a>

                <a href="#jo__results" class="imgMount">
                    <div class="row">
                        <img src="img/mount2.png" alt="珠穆朗瑪峰" class="imgMount" id="img-himalayas">
                        <span id="text-himalayas">珠穆朗瑪峰</span>
                    </div>
                </a>
                <a href="#jo__results" class="imgMount">
                    <div class="row">
                        <img src="img/mount2.png" alt="百內國家公園" class="imgMount" id="img-paine">
                        <span id="text-paine">百內國家公園</span>
                    </div>
                </a>
                <a href="#jo__results" class="imgMount">
                    <div class="row">
                        <img src="img/mount2.png" alt="玉山" class="imgMount" id="img-jade">
                        <span id="text-jade">玉山</span>
                    </div>
                </a>
                <a href="#jo__results" class="imgMount">
                    <div class="row">
                        <img src="img/mount2.png" alt="阿爾卑斯山-少女峰" class="imgMount" id="img-alps">
                        <span id="text-alps">阿爾卑斯山-少女峰</span>
                    </div>
                </a>
                <a href="#jo__results" class="imgMount">
                    <div class="row">
                        <img src="img/mount2.png" alt="馬丘比丘" class="imgMount" id="img-machu">
                        <span id="text-machu">馬丘比丘</span>
                    </div>
                </a>
                <a href="#jo__results" class="imgMount">
                    <div class="row">
                        <img src="img/mount2.png" alt="聖克魯斯" class="imgMount" id="img-cruz">
                        <span id="text-cruz">聖克魯斯</span>
                    </div>
                </a>
                <a href="#jo__results" class="imgMount">
                    <div class="row">
                        <img src="img/mount2.png" alt="吉力馬札羅山" class="imgMount" id="img-kilimanjaro">
                        <span id="text-kilimanjaro">吉力馬札羅山</span>
                    </div>
                </a>
                <a href="#jo__results" class="imgMount">
                    <div class="row">
                        <img src="img/mount2.png" alt="阿斯帕林國家公園" class="imgMount" id="img-aspalin">
                        <span id="text-aspalin">阿斯帕林國家公園</span>
                    </div>
                </a>
                <a href="#jo__results" class="imgMount">
                    <div class="row">
                        <img src="img/mount2.png" alt="優勝美地國家公園" class="imgMount" id="img-yosemite">
                        <span id="text-yosemite">優勝美地國家公園</span>
                    </div>
                </a>


            </div>
        </div>

        <!-- 篩選bar / 寫日誌的按鈕  -->
        <a name="jo__results"></a>
        <div class="jo__filter__and__write">
            <div class="row">
                <div class="jo__filter">
                    <div class="row">
                        <div class="jo__filter__text">
                            <p>篩選日誌 : &nbsp;</p>
                        </div>

                        <form class="">
                            <span class="joForm__input">
                                <input type="radio" name="mountType" value="Fuji" checked="checked" id="mount-fuji">
                                <label for="mount-fuji">富士山</label>

                                <input type="radio" name="mountType" value="Himalayas" id="mount-himalayas">
                                <label for="mount-himalayas">珠穆朗瑪峰</label>

                                <input type="radio" name="mountType" value="Paine" id="mount-paine">
                                <label for="mount-paine">百內國家公園</label>

                                <input type="radio" name="mountType" value="Jade" id="mount-jade">
                                <label for="mount-jade">玉山</label>

                                <input type="radio" name="mountType" value="Alps" id="mount-alps">
                                <label for="mount-alps">阿爾卑斯山-少女峰</label>

                                <input type="radio" name="mountType" value="MachuPicchu" id="mount-machu">
                                <label for="mount-machu">馬丘比丘</label>

                                <input type="radio" name="mountType" value="SantaCruz" id="mount-cruz">
                                <label for="mount-cruz">聖克魯斯</label>

                                <input type="radio" name="mountType" value="Kilimanjaro" id="mount-kilimanjaro">
                                <label for="mount-kilimanjaro">吉力馬札羅山</label>

                                <input type="radio" name="mountType" value="Aspalin" id="mount-aspalin">
                                <label for="mount-aspalin">阿斯帕林國家公園</label>

                                <input type="radio" name="mountType" value="Yosemite" id="mount-yosemite">
                                <label for="mount-yosemite">優勝美地國家公園</label>

                                <input type="radio" name="mountType" value="Others" id="mount-others">
                                <label for="mount-others">其他</label>
                            </span>
                        </form>
                    </div>
                </div>
                <div class="jo__write">
                    <button class="btn-main-l" id="button_with_pencil">
                        <img src="img/iconfinder_editor-pencil-pen-edit-write-glyph_763339.png"><span id="jo_write_text">我要寫日誌</span></button>
                </div>
            </div>
        </div>

        <!-- 第二屏日誌的總覽 -->
        <div id=jo__allcards__bg>
            <main class="jo__allcards">
                <a name="" href="journal.php">
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
                            <p class="jo__text">2222想飽覽富士山與河口湖全景，一定要搭乘「カチカチ山纜車」前往天上山公園！從「河口湖畔」站搭乘纜車至山頂公園只要三分鐘左右，一路上的景色相當壯觀，天氣好的話據說還能眺望富士急遊樂園。。</p>
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
                            <p class="jo__text">3333想飽覽富士山與河口湖全景，一定要搭乘「カチカチ山纜車」前往天上山公園！從「河口湖畔」站搭乘纜車至山頂公園只要三分鐘左右，一路上的景色相當壯觀，天氣好的話據說還能眺望富士急遊樂園。一路上的景色相當壯觀，天氣好的話據說還能眺望富士急遊樂園。</p>
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
                <a name="" href="">
                    <article class="jo__onecard">
                        <img src="img/fuji5.jpg">
                        <div class="jo__allinfo">
                            <p class="jo__publish">發表於2018/12/29</p>
                            <h3>富士山</h3>
                            <p class="jo__text">5555想飽覽富士山與河口湖全景，一定要搭乘「カチカチ山纜車」前往天上山公園！從「河口湖畔」站搭乘纜車至山頂公園只要三分鐘左右，一路上的景色相當壯觀，天氣好的話據說還能眺望富士急遊樂園。</p>
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
                        <img src="img/fuji6.jpg">
                        <div class="jo__allinfo">
                            <p class="jo__publish">發表於2018/12/29</p>
                            <h3>富士山</h3>
                            <p class="jo__text">想飽覽富士山與河口湖全景，一定要搭乘「カチカチ山纜車」前往天上山公園！從「河口湖畔」站搭乘纜車至山頂公園只要三分鐘左右，一路上的景色相當壯觀，天氣好的話據說還能眺望富士急遊樂園。</p>
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
                            <p class="jo__text">想飽覽富士山與河口湖全景，一定要搭乘「カチカチ山纜車」前往天上山公園！從「河口湖畔」站搭乘纜車至山頂公園只要三分鐘左右，一路上的景色相當壯觀。想飽覽富士山與河口湖全景，一定要搭乘「カチカチ山纜車」前往天上山公園！從「河口湖畔」站搭乘纜車至山頂公園只要三分鐘左右，一路上的景色相當壯觀，天氣好的話據說還能眺望富士急遊樂園。</p>
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
                        <img src="img/fuji1.jpeg">
                        <div class="jo__allinfo">
                            <p class="jo__publish">發表於2018/12/29</p>
                            <h3>富士山</h3>
                            <p class="jo__text">想飽覽富士山與河口湖全景，一定要搭乘「カチカチ山纜車」前往天上山公園！從「河口湖畔」站搭乘纜車至山頂公園只要三分鐘左右，一路上的景色相當壯觀。</p>
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




            <!-- 查看更多日誌的按鈕 -->
            <div class="joOverMore">
                <button class="btn-main-l">查看更多日誌</button>
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
            include_once('footer.php')
        ?>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="js/header.js"></script>
    <script src="js/vue.js"></script>
    <script src="js/journalsOverview.js"></script>
</body>

</html>