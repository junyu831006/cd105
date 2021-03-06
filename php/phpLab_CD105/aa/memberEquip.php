<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員行前裝備</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/memberSystem.css">
    <link rel="stylesheet" href="css/memberEquip.css">

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
        <nav class="msNav">
            <h2>會員系統</h2>
            <ul>
                <li><a href="memberSystem.php" id="currentWebsite">個人中心</a></li>
                <li><a href="memberOrders.php">我的訂單</a></li>
                <li><a href="memberJournals.php">登山日誌</a></li>
                <li><a href="memberEquip.php">行前裝備</a></li>
            </ul>
        </nav>
        <div class="msEquipment" id="msEquipment">
            <h3>行前裝備</h3>
            <form class="msEquipment--selector">
                <span class="msEquipment__input" id="msEquipment__input">
                    <input type="radio" name="location" value="Asia" checked="checked" id="locat-asia">
                    <label for="locat-asia">富士山</label>

                    <input type="radio" name="location" value="Europe" checked="checked" id="locat-europe">
                    <label for="locat-europe">喜馬拉雅山</label>

                    <input type="radio" name="location" value="Africa" checked="checked" id="locat-africa">
                    <label for="locat-africa">玉山</label>
                </span>
            </form>


            <div class="msEquipment--content" id="msEquipment--content">
                <div class="row">
                    <ul>
                        <h4>登山寢具</h4>
                        <li><input type="checkbox" name="" id="">帳篷</li>
                        <li><input type="checkbox" name="" id="">二人高山帳</li>
                        <li><input type="checkbox" name="" id="">三人頂級全透氣帳</li>
                        <li><input type="checkbox" name="" id="">輕量四人帳</li>
                        <li><input type="checkbox" name="" id="">睡袋</li>
                        <li><input type="checkbox" name="" id="">地布</li>
                        <li><i class="material-icons">add</i><input type="text" name="" id=""></li>
                    </ul>
                    <!-- <ul>
                        <h4>登山寢具</h4>
                        <li><input type="checkbox" name="" id="">睡袋</li>
                        <li><input type="checkbox" name="" id="">地布</li>
                        <li><input type="checkbox" name="" id="">三人頂級全透氣帳</li>
                        <li><input type="checkbox" name="" id="">輕量四人帳</li>
                        <li><i class="material-icons">add</i><input type="text" name="" id=""></li>
                    </ul> -->
                    <ul>
                        <h4>醫療類</h4>
                        <li><input type="checkbox" name="" id="">彈性繃帶</li>
                        <li><input type="checkbox" name="" id="">ＯＫ繃</li>
                        <li><input type="checkbox" name="" id="">個人藥品</li>
                        <li><input type="checkbox" name="" id="">碘酒</li>
                        <li><input type="checkbox" name="" id="">面速力達母</li>
                        <li><input type="checkbox" name="" id="">棉片·棉花棒</li>
                        <!-- <li><input type="checkbox" name="" id="">感冒藥</li>
                        <li><input type="checkbox" name="" id="">止瀉藥</li>
                        <li><input type="checkbox" name="" id="">腸胃藥</li>
                        <li><input type="checkbox" name="" id="">止痛藥</li>
                        <li><input type="checkbox" name="" id="">高山症用藥</li> -->
                        <li><i class="material-icons">add</i><input type="text" name="" id=""></li>
                    </ul>
                    <ul>
                        <h4>衣物類</h4>
                        <li><input type="checkbox" name="" id="">保暖手套</li>
                        <li><input type="checkbox" name="" id="">保暖外套</li>
                        <li><input type="checkbox" name="" id="">綁腿</li>
                        <li><input type="checkbox" name="" id="">防水透氣雨褲</li>
                        <li><input type="checkbox" name="" id="">墨鏡</li>
                        <li><input type="checkbox" name="" id="">登山襪</li>
                        <!-- <li><input type="checkbox" name="" id="">登山鞋</li>
                        <li><input type="checkbox" name="" id="">排汗衣</li> -->
                        <!-- <li><input type="checkbox" name="" id="">保暖帽</li>
                        <li><input type="checkbox" name="" id="">護膝</li>
                        <li><input type="checkbox" name="" id="">雨衣</li>
                        <li><input type="checkbox" name="" id="">雨傘</li>
                        <li><input type="checkbox" name="" id="">背包防雨罩</li> -->
                        <li><i class="material-icons">add</i><input type="text" name="" id=""></li>
                    </ul>
                    <ul>
                        <h4>用具配件</h4>
                        <li><input type="checkbox" name="" id="">濕紙巾</li>
                        <li><input type="checkbox" name="" id="">衛生紙</li>
                        <li><input type="checkbox" name="" id="">防曬乳</li>
                        <li><input type="checkbox" name="" id="">護唇膏</li>
                        <li><input type="checkbox" name="" id="">暖暖包</li>
                        <li><input type="checkbox" name="" id="">簡易冰爪</li>
                        <li><input type="checkbox" name="" id="">專業12齒冰爪鞋套</li>
                        <!-- <li><input type="checkbox" name="" id="">單頭登山扣彈性繩</li>
                        <li><input type="checkbox" name="" id="">雙頭登山扣彈性繩</li>
                        <li><input type="checkbox" name="" id="">反光細目編織營繩</li>
                        <li><input type="checkbox" name="" id="">急用毯</li>
                        <li><input type="checkbox" name="" id="">登山杖</li>
                        <li><input type="checkbox" name="" id="">溫濕度計</li>
                        <li><input type="checkbox" name="" id="">電池轉接套頭</li>
                        <li><input type="checkbox" name="" id="">頭燈</li>
                        <li><input type="checkbox" name="" id="">打火機</li>
                        <li><input type="checkbox" name="" id="">垃圾袋</li>
                        <li><input type="checkbox" name="" id="">瑞士刀</li> -->
                        <li><i class="material-icons">add</i><input type="text" name="" id=""></li>
                    </ul>
                    <ul>
                        <h4>炊具</h4>
                        <li><input type="checkbox" name="" id="">鍋子</li>
                        <li><input type="checkbox" name="" id="">真空杯</li>
                        <li><i class="material-icons">add</i><input type="text" name="" id=""></li>
                    </ul>
                    <ul class="list">
                        <h4>食品類</h4>
                        <li><input type="checkbox" name="" id="">泡麵</li>
                        <li><input type="checkbox" name="" id="">即時湯包</li>
                        <li><input type="checkbox" name="" id="">隨身糧</li>
                        <li><input type="checkbox" name="" id="">鹽</li>
                        <li><input type="checkbox" name="" id="">水</li>
                        <li><i class="material-icons">add</i><input type="text" name="" id="" value=""></li>
                    </ul>
                </div>
            </div>
            <div class="msEquipment__btn">
                <div class="row">
                    <button class="btn-sub-s" id="print">列印</button>
                    <button class="btn-main-s">儲存</button>
                </div>
            </div>

        </div>
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
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="js/header.js"></script>
    <script src="js/vue.js"></script>
    <script>


        $('#msEquipment__input').click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).toggleClass('expanded');
            $('#' + $(e.target).attr('for')).prop('checked', true);
        });
        $(document).click(function () {
            $('#msEquipment__input').removeClass('expanded');
        });

    </script>
    <script>
        var msEquipmentList = document.getElementById('msEquipment--content');
        document.getElementById('print').onclick = printBlock;
        function printBlock() {
            var content = msEquipmentList.innerHTML;
            var printPage = window.open("", "printPage", "");
            printPage.document.open();
            printPage.document.write("<HTML><head><style>ul{float: left;}</style>");
            printPage.document.write("</head><BODY onload='window.print();window.close()'>");
            printPage.document.write(content);
            printPage.document.close("</BODY></HTML>");

        }
    </script>
    <script>
        $('.material-icons ~ input').keyup(function (e) {
            //判斷按下enter
            if (e.which == 13) {
                //找到框框的li
                var li = $(this).closest('li');
                //找到text的value
                var val = $(this).val();
                //每個item模板
                var newItem = `<li><input type="checkbox" name="" id="">${val}</li>`;
                //新item插入輸入框之前
                li.before(newItem);
            }
        });
    </script>
</body>

</html>