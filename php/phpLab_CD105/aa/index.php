<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js"></script>
    <script src="js/vue.js"></script>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

<?php
        include_once('header.php');
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
    <section id="indexBanner">
        <span class="cloud"></span>
        <span class="cloud cloud1"></span>
        <span class="cloud cloud2"></span>
        <span class="cloud cloud4"></span>
        <span class="cloud3"></span>
        <div id="banner">
            <h1 id="h1"><span id="indexName1">O</span>
                <span id="indexName2">U</span>
                <span id="indexName3">T</span>
                <span id="indexName4">L</span>
                <span id="indexName5">A</span>
                <span id="indexName6">N</span>
                <span id="indexName7">D</span>
                <span id="indexName8">E</span>
                <span id="indexName9">R</span></h1>
            <img src="img/暫時用的圖/banner-mountain3.png" alt="banner">
            <input type="text" id="bannerSearch">
            <i class="material-icons searchicon">search</i>
        </div>
    </section>
    <section id="index-warp2">
        <h2>服務特色</h2>
        <div id="index-warp2-card-all">
            <div class="index-warp2-card">
                <h3>一站式行程</h3>
                <p>還在煩惱空有裝備沒朋友?</p>
                <img src="img/暫時用的圖/map-marked-solid.png" alt="行程">
            </div>
            <div class="index-warp2-card">
                <h3>日誌分享</h3>
                <p>不知道哪座山適合自己?</p>
                <img src="img/暫時用的圖/iconfinder_78_111113.png" alt="日誌">
            </div>
            <div class="index-warp2-card">
                <h3>自訂裝備清單</h3>
                <p>線上裝備清單供您做及時調整</p>
                <img src="img/暫時用的圖/iconfinder_backpack_3512612.png" alt="裝備">
            </div>
        </div>
    </section>

    <!--  -->
    <!-- <section id="index-warp3">
        <h2>熱門行程</h2>
        <div id="index-warp3-img-all">
            <i id="index-warp3-img-left" class="material-icons">keyboard_arrow_left</i>
            <div id="index-warp3-img1-block">
                <img draggable="false" src="https://picsum.photos/600/422/?random=1" id="index-warp3-img1">
                <span class="index-warp3-img-text">這不是山這不是山</span>
            </div>
            <div id="index-warp3-img2-block">
                <img draggable="false" src="https://picsum.photos/600/422/?random=2" id="index-warp3-img2" class="img-position">
                <span class="index-warp3-img-text">這不是山這不是山</span>
            </div>
            <div id="index-warp3-img3-block">
                <img draggable="false" src="https://picsum.photos/600/422/?random=3" id="index-warp3-img3" class="img-position">
                <span class="index-warp3-img-text">這不是山這不是山</span>
            </div>
            <div id="index-warp3-img4-block">
                <img draggable="false" src="https://picsum.photos/600/422/?random=4" id="index-warp3-img4" class="img-position">
                <span class="index-warp3-img-text">這不是山這不是山</span>
            </div>
            <div id="index-warp3-img5-block">
                <img draggable="false" src="https://picsum.photos/600/422/?random=5" id="index-warp3-img5" class="img-position">
                <span class="index-warp3-img-text">這不是山這不是山</span>
            </div>
            <i id="index-warp3-img-right" class="material-icons">keyboard_arrow_right</i>
        </div>
        <button><a href="#">查看更多行程</a></button>
    </section> -->



    <!-- 上面JS還沒寫完  所以先用Vue套件演示 -->
    <section id="index-warp3">
        <h2>熱門行程</h2>
        <div id="carousel">
            <!-- <i id="index-warp3-img-left" class="material-icons">keyboard_arrow_left</i> -->
            <carousel-3d :autoplay="true" :autoplay-timeout="2400">
                <slide id="index-warp3-img1-block" :index="0"><img src="img/山的行程/玉山.jpg" /><span class="index-warp3-img-text">台灣最高峰-玉山夏季雲海繚繞10日</span></slide>
                <slide id="index-warp3-img2-block" :index="1"><img src="img/山的行程/百內.jpg" /><span class="index-warp3-img-text">智利爬山健行-百內國家公園10日</span></slide>
                <slide id="index-warp3-img3-block" :index="2"><img src="img/山的行程/少女峰.jpg" /><span class="index-warp3-img-text">瑞士歐洲之巔-少女峰高原觀景冰川世界15日</span></slide>
                <slide id="index-warp3-img4-block" :index="3"><img src="img/山的行程/阿斯帕林.jpg" /><span class="index-warp3-img-text">紐西蘭著名高峰-阿斯帕林山高山湖泊10日</span></slide>
                <slide id="index-warp3-img5-block" :index="4"><img src="img/山的行程/吉利馬札羅.jpg" /><span class="index-warp3-img-text">非洲之巔-吉利馬札羅徒步登上峰頂15日</span></slide>
            </carousel-3d>
            <!-- <i id="index-warp3-img-right" class="material-icons">keyboard_arrow_right</i> -->
        </div>
        <button><a href="#">查看更多行程</a></button>
    </section>













    <section id="index-warp4">
        <h2>登山小遊戲</h2>
        <div id="index-warp4-all">
            <div id="index-warp4-game-text" class="index-warp4-1">
                <p>總共三關每關都有50紅利點數可以拿</p>
                <p>目前選擇的是:<span id="game-title">請選擇關卡</span></p>
                <button id="game-go">開始遊戲</button>
            </div>
            <div id="index-warp4-game-all" class="index-warp4-1">
                <img src="img/暫時用的圖/Group 200.png" alt="遊戲路徑圖">
                <div class="game-position" id="index-game1">第一關:<span>採梅果</span></div>
                <div class="game-position" id="index-game2">第二關:<span>鑽木取火</span></div>
                <div class="game-position" id="index-game3">第三關:<span>觀星</span></div>
                <img id="humanity" class="game-position" src="img/暫時用的圖/hiking-solid.png" alt="人類">
            </div>
        </div>
    </section>

    <!-- 遊戲區塊 -->

    <!-- <div id="index-game-block-1">
        <span></span>
        <h3>採梅果</h3>
        <div class="game-map">
            
        </div>
    </div> -->


    <section id="index-warp5">
        <h2>登山日誌</h2>
        <div id="index-warp5-list">
            <ul class="list-1">
                <button id="asia">亞洲</button>
                <button id="europe">歐洲</button>
                <button id="africa">非洲</button>
            </ul>
            <ul class="list-1">
                <button id="oceania">大洋洲</button>
                <button id="namerica">北美洲</button>
                <button id="samerica">南美洲</button>
            </ul>
        </div>
        <div id="index-list-img-all">
            <div id="asia-all" class="index-list-hide">
                <img id="asia-img" src="img/暫時用的圖/各大洲/亞洲.png" alt="亞洲">
                <div class="index-card-after" id="index-asia-card-1">
                    <div class="index-card" id="index-asia-card-text-1">
                        <a href="#">
                            <img src="img/暫時用的圖/馬雅叢林.jpg" alt="">
                            <span>發表於<span>2019/1/24</span></span>
                            <h3>我山難了</h3>
                            <p>求救123123....</p>
                            <span><i class="material-icons">favorite</i>123</span><span><i class="far fa-comment"></i>87</span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="europe-all" class="index-list-hide">
                <img id="europe-img" src="img/暫時用的圖/各大洲/歐洲.png" alt="歐洲">
                <div class="index-card-after" id="index-card-europe-1">
                    <div class="index-card" id="index-europe-card-text-1">
                        <a href="#">
                            <img src="img/暫時用的圖/馬雅叢林.jpg" alt="">
                            <span>發表於<span>2019/1/24</span></span>
                            <h3>我山難了</h3>
                            <p>求救123123....</p>
                            <span><i class="material-icons">favorite</i>123</span><span><i class="far fa-comment"></i>87</span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="africa-all" class="index-list-hide">
                <img id="africa-img" src="img/暫時用的圖/各大洲/非洲.png" alt="非洲">
                <div class="index-card-after" id="index-card-africa-1">
                    <div class="index-card">
                        <img src="img/暫時用的圖/馬雅叢林.jpg" alt="">
                        <span>發表於<span>2019/1/24</span></span>
                        <h3>我山難了</h3>
                        <p>求救123123....</p>
                        <span><i class="material-icons">favorite</i>123</span><span><i class="far fa-comment"></i>87</span>
                    </div>
                </div>
            </div>
            <div id="oceania-all" class="index-list-hide">
                <img id="oceania-img" src="img/暫時用的圖/各大洲/大洋洲.png" alt="大洋洲">
                <div class="index-card-after" id="index-card-oceania-1">
                    <div class="index-card">
                        <img src="img/暫時用的圖/馬雅叢林.jpg" alt="">
                        <span>發表於<span>2019/1/24</span></span>
                        <h3>我山難了</h3>
                        <p>求救123123....</p>
                        <span><i class="material-icons">favorite</i>123</span><span><i class="far fa-comment"></i>87</span>
                    </div>
                </div>
            </div>
            <div id="namerica-all" class="index-list-hide">
                <img id="namerica-img" id="namerica-img" src="img/暫時用的圖/各大洲/北美洲.png" alt="北美洲">
                <div class="index-card-after" id="index-card-namerica-1">
                    <div class="index-card">
                        <img src="img/暫時用的圖/馬雅叢林.jpg" alt="">
                        <span>發表於<span>2019/1/24</span></span>
                        <h3>我山難了</h3>
                        <p>求救123123....</p>
                        <span><i class="material-icons">favorite</i>123</span><span><i class="far fa-comment"></i>87</span>
                    </div>
                </div>
            </div>
            <div id="samerica-all" class="index-list-hide">
                <img id="samerica-img" src="img/暫時用的圖/各大洲/南美洲.png" alt="南美洲">
                <div class="index-card-after" id="index-card-samerica-1">
                    <div class="index-card">
                        <img src="img/暫時用的圖/馬雅叢林.jpg" alt="">
                        <span>發表於<span>2019/1/24</span></span>
                        <h3>我山難了</h3>
                        <p>求救123123....</p>
                        <span><i class="material-icons">favorite</i>123</span><span><i class="far fa-comment"></i>87</span>
                    </div>
                </div>
            </div>

            <button class="btn samerica"> <a href="#">查看更多日誌</a></button>




        </div>
    </section>


    <section id="index-warp6">
        <h2>推薦行程</h2>
        <p>還是不知道要去哪裡?</p>
        <p>告訴我們裝備，我們幫你推薦</p>
        <form action="#">
            <div id="index-equipment">
                <div class="equipment">
                    <div class="equipment-list">
                        <label for="equipment1">
                            <img src="img/裝備/帳篷.png" alt="帳篷">
                        </label>
                        <input type="checkbox" id="equipment1" name="eq" value="1">
                        <label class="label" for="equipment1">
                            <div class="tick"></div>
                        </label>
                    </div>
                    <div class="equipment-list">
                        <label for="equipment2">
                            <img src="img/裝備/手套.png" alt="手套">
                        </label>
                        <input type="checkbox" id="equipment2" name="eq" value="2">
                        <label class="label" for="equipment2">
                            <div class="tick"></div>
                        </label>
                    </div>
                </div>
                <div class="equipment">
                    <div class="equipment-list">
                        <label for="equipment3">
                            <img src="img/裝備/登山杖.png" alt="登山杖">
                        </label>
                        <input type="checkbox" id="equipment3" name="eq" value="3">
                        <label class="label" for="equipment3">
                            <div class="tick"></div>
                        </label>
                    </div>
                    <div class="equipment-list">
                        <label for="equipment4">
                            <img src="img/裝備/背包.png" alt="背包">
                        </label>
                        <input type="checkbox" id="equipment4" name="eq" value="4">
                        <label class="label" for="equipment4">
                            <div class="tick"></div>
                        </label>
                    </div>
                </div>
                <div class="equipment">
                    <div class="equipment-list">
                        <label for="equipment5">
                            <img src="img/裝備/衣服.png" alt="衣服">
                        </label>
                        <input type="checkbox" id="equipment5" name="eq" value="5">
                        <label class="label" for="equipment5">
                            <div class="tick"></div>
                        </label>
                    </div>
                    <div class="equipment-list">
                        <label for="equipment6">
                            <img src="img/裝備/褲子.png" alt="褲子">
                        </label>
                        <input type="checkbox" id="equipment6" name="eq" value="6">
                        <label class="label" for="equipment6">
                            <div class="tick"></div>
                        </label>
                    </div>
                </div>
                <div class="equipment">
                    <div class="equipment-list">
                        <label for="equipment7">
                            <img src="img/裝備/襪子.png" alt="襪子">
                        </label>
                        <input type="checkbox" id="equipment7" name="eq" value="7">
                        <label class="label" for="equipment7">
                            <div class="tick"></div>
                        </label>
                    </div>
                    <div class="equipment-list">
                        <label for="equipment8">
                            <img src="img/裝備/防風衣.png" alt="防風衣">
                        </label>
                        <input type="checkbox" id="equipment8" name="eq" value="8">
                        <label class="label" for="equipment8">
                            <div class="tick"></div>
                        </label>
                    </div>
                </div>
                <div class="equipment">
                    <div class="equipment-list">
                        <label for="equipment9">
                            <img src="img/裝備/鞋子.png" alt="鞋子">
                        </label>
                        <input type="checkbox" id="equipment9" name="eq" value="9">
                        <label class="label" for="equipment9">
                            <div class="tick"></div>
                        </label>
                    </div>
                    <div class="equipment-list">
                        <label for="equipment10">
                            <img src="img/裝備/頭燈.png" alt="頭燈">
                        </label>
                        <input type="checkbox" id="equipment10" name="eq" value="10">
                        <label class="label" for="equipment10">
                            <div class="tick"></div>
                        </label>
                    </div>
                </div>

                <div class="equipment-btn">
                    <button class="btn">查看推薦行程</button>
                </div>
            </div>
        </form>
    </section>






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
    <script src="js/index.js"></script>
</body>

</html>