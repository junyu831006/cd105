<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/journal.css">
    <title>Outlander - journal</title>
    <script src="js/vue.js"></script>
    <script src="js/enquire.min.js"></script>
</head>
<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v3.2&appId=2118561601789454&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

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
                        <img src="img/pic_781_14.jpg">
                    </div>
                    <div class="filterListImg-img">
                        <img src="img/2000x2000-0-70-a837fa982028e9587ed5abaa0ca6ef0a.jpg">
                    </div>
                    <div class="filterListImg-img">
                        <img src="img/6ba08327f04d2b1fd59e8126e0f8d92a.jpg">
                    </div>
                    <div class="filterListImg-img">
                        <img src="img/mt-fuji-japan-top-ports.jpg">
                    </div>
                </div>
            </div>
        </div>
    </nav> -->

    <i id="up" class="material-icons">keyboard_arrow_up</i>


<!-- 個人日誌開始 -->
    <div class="jnBg">
        <div class="jnMw1200">
            <div class="jnBread">
                <span>首頁</span>
                <i class="material-icons">keyboard_arrow_right</i>
                <span>登山日誌</span>
                <i class="material-icons">keyboard_arrow_right</i>
                <span>日本富士山</span>

            </div>
            <div class="jnPaper">
                <div class="row jnJCC">
                    <!-- 文章內容開始 -->
                    <section id="jnContent">
                        <div class="jnContent__imgCtrl">
                            <img src="img/jn_img1.png" class="inContent__img">
                            <span id="jnIcon__fav">
                                <i class="material-icons">favorite_border</i>
                            </span>
                        </div>
                        <div id="jnContent__plr20"> <!--此容器內物件才padding: 0 20px-->
                            <p id="jnContent__1thP">
                                日本富士山，長野縣松本市、岐阜縣高山市交界，槍岳之下，槍岳山莊的早朝屋南邊朝燒岩稜<br>
                                稜線一路通向穗高群峰，不過穗高現在都被大喰岳擋住了<br>
                                這條稜線也是長野縣松本市、岐阜縣高山市的交界<br>
                                右方遠處有乘鞍岳（3026m）、御嶽（3067m）兩座火山
                            </p>
                            <img src="img/jn_img2.jpg" class="inContent__img">
                            <p>
                                朝陽照入槍沢大谷中<br>
                                該出發啦，今天可有得走了<br>
                                由槍岳山莊走槍岳的東稜線「東鐮尾根」前往西岳、再轉北經過大天井岳，抵達燕岳山莊<br>
                                這條路線就是以秋紅山色著名的「表銀座」縱走。<br>
                                里程很長，如果反著從燕岳走來槍岳，要花兩天的時間<br>
                                但從槍岳走到燕岳是下坡，所以花九個小時拚一拚，應該可以在今天內完成<br>
                            </p>
                            <img src="img/jn_img3.jpg" class="inContent__img">
                            <p>D3 開始自己走啦！上回的雪西有順取120岳的博可爾基點峰，大南山和弓水山，這次有機會把其他的能走多少是多少。所以第一座為博可爾最高峰，這次和之前走不同路線選，選自基點和最高峰，不同角度拍博可爾草一日竹火，值得。上什最高峰時間多花了些，火石山直接跳過，火石下無水（應上爬100M有），過山澗即背水，因知今天另兩隊共31人會在大南山紮，不想人擠人直接背水走哪紮哪。大南北沒明顯入口和標示，就是好撥箭竹路到最高點找1-2處自拍。登山口勉強可紮一人又有4G，溫暖無風無反潮。</p>
                            <img src="img/jn_img4.jpg" class="inContent__img">
                            <p>D4 一早到大南山營地，冷、風大、又濕，不停留。弓水山不再上，到頭鷹前拍了有人和沒人景色後，忍不住的也立腳架自拍。最後頭鷹山與他隊合照後輕裝往頭鷹北，但無路跡GPX，自己切，本應下300M再上200M返程相反，但才下100M海拔，一眼被樹枝刺傷不適，只好爬上岩石稜線上自拍撤退照，當晚宿奇峻營地大，晚上和友隊協作小喝閒聊（正好先前行程遇過認識），晚間傷的眼不適狂流淚單眼視力減弱，因而評估原計次日要走的釜碗西峰+釜碗山來回約12-14小時，恐不切當，僅走到中間的西峰，避免視力不良摸黑增加危險。</p>
                        </div>
                        <input type="submit" id="btn__jnSeeProd" value="查看相關行程">
                    </section><!-- 文章內容結束-->


                    <!-- 作者資訊開始 -->
                    <div id="jnContent__info">
                        <div id="jnContent__info--pos">
                            <div class="jnContent__social">
                                <button><img src="img/jnIcon_insta.png" alt="instagram"></button>
                                <button><img src="img/jnIcon_twiter.png" alt="twiter"></button>
                                <button><img src="img/jnIcon_fb.png" alt="facebook"></button>
                            </div>
                            <h2 id="jnContent__title">日本 - 富士山</h2>
                            <div class="jnContent__infoW">
                                <img src="img/jn_writer.png" id="jnContent__myphoto" alt="作者頭像">
                                <br>
                                <span id="jnContent__writer">作者：Vincent</span>
                                <br>
                                <span id="jnContent__publishTime">發表於2018/12/29</span>
                            </div>
                            <div class="jnContent__infoJ">
                                <h3>行程日期：</h3>
                                <span id="jnContent__date">2019/01/05 - 2019/01/07</span>
                                <h3>地點：</h3>
                                <span id="jnContent__locate">日本富士山</span>
                                <button id="btn__jnReport">檢舉日誌</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div> <!-- 作者資訊結束 -->
                </div> <!-- display:flex -->
            </div>  <!-- jnPaper底紙 -->
        </div> <!-- max-width:1200px -->

        <div class="jnMw1200">
            <div class="jnFB">
                <div class="jnFB__plr40">
                    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>

                </div>
            </div>         
        </div>


    </div>
<?php
    include_once('footer.php');
?>
    <!-- <footer id="footer">
        <img id="footer-img" src="img/foo1.png" alt="footer">
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
    <script src="js/header.js"></script>

    <script src="js/journal.js"></script>
</body>
</html>