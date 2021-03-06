<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Outlander - customized</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/customized.css">
    <script src="js/vue.js"></script>
    <script src="js/enquire.min.js"></script>
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

    <?php
    include_once('header.php');
    ?>
    <img id="robot" src="img/robot-solid.png" alt="機器人">
    <i id="up" class="material-icons">keyboard_arrow_up</i>


    <div class="cu_bg">
        <h2>安排專屬於你的登山景點</h2>
        <div class="cuProcess">
            <div class="cuProcess__first">
                <div class="cuProcess__circle cuProcess__circle--done">1</div>
                <p>選擇行程</p>
            </div>
            <div class="cuProcess__line"></div>
            <div class="cuProcess__second">
                <div class="cuProcess__circle" id="cuProcessFill">2</div>
                <p>選擇日期及嚮導</p>
            </div>
        </div>

        <!-- 風景詳細介紹，避免1200阻礙所以放在這 -->
        <div class="cuCustom__detailBg">
            <div id="cuCustom__detail">
                <img src="img/cu__sceneryItem3.jpg" alt="安娜普納基地">
                <div class="cuCustom__detail--content">
                    <h4>安娜普那基地</h4>
                    <i class="material-icons">restaurant</i>
                    <i class="fas fa-campground"></i>
                    <p id="cuCustom__price">價格：2,000 NTW</p>
                    <p><span class="cuStyle__fwb">景點介紹：</span>尼泊爾著名健行步道之一。安娜普娜(Annapurna)基地營高4,130M。有魚尾峰千變萬化的景觀及山上村落悠閒的田園生活、驢隊漫步其間叮叮噹噹聲不絕於耳，無怪乎全世界喜愛高山健行的登山客把這路線當作必行之地。</p>
                    <input type="submit" id="btn_cuAddOne" class="cuBtn" value="加入景點">
                </div>
            </div>
        </div>

        <div class="cuMask">
            <section id="cu__step1">
                <!-- 選擇器__洲別及山岳 -->
                <div class="cuCustom">
                    <div class="cuCustom__crtlRWD">
                        <div class="custom-select cu_selectNum1" >
                            <select>
                                <option value="0">請選擇洲別</option>
                                <option value="1">亞洲</option>
                                <option value="2">歐洲</option>
                                <option value="3">非洲</option>
                                <option value="4">北美洲</option>
                                <option value="5">南美洲</option>
                                <option value="6">大洋洲</option>
                            </select>
                        </div>
                        <div class="custom-select" >
                            <select>
                                <option value="0">請選擇山岳</option>
                                <option value="1">富士山</option>
                                <option value="2">喜馬拉雅山-珠穆朗瑪峰</option>
                                <option value="3">阿爾卑斯山-少女峰</option>
                                <option value="4">吉力馬札羅山優勝美地</option>
                                <option value="5">優勝美地</option>
                                <option value="6">馬丘比丘-印加</option>
                                <option value="7">百內國家公園</option>
                                <option value="8">聖克魯斯</option>
                                <option value="9">阿斯帕林</option>
                                <option value="10">玉山</option>
                            </select>
                        </div>
                                   
                        <div id="cuCustom__zone">
                            <!-- 風景列表 -->
                            <h3 id="cuCustom__sceneryTitle">山岳風景列表</h3>
                            <div id="cuCustom__sceneryZone--bg">
                                <div class="cuCustom__sceneryZone">
                                    <div id="cuCustom__sceneryZone--OF" id="scroll">
                                        <div class="cuCustom__sceneryItem cuScenery__Item1">
                                            <div class="cuCustom__sceneryContent">
                                                <p>安娜普那基地</p>
                                                <i class="material-icons">restaurant</i>
                                                <i class="fas fa-campground"></i>
                                            </div>
                                            <button class="btn_cuAddScenery--767 cuBtn__styleClear">
                                                <i class="material-icons">check_box</i>
                                            </button>
                                            <span class="cuCustom__price1">$2,000</span>
                                            <div class="cuCustom__showOption">
                                                <button class="btn_cuAddScenery">
                                                        <i class="material-icons">add</i>
                                                </button>
                                                <button class="btn_cuWatchScenery">
                                                    <i class="material-icons" >search</i>
                                                </button>
                                            </div>
                                        </div>
                                       
                                        <div class="cuCustom__sceneryItem cuScenery__Item2">
                                            <div class="cuCustom__sceneryContent">
                                                <p>安娜普那基地</p>
                                                <i class="material-icons">restaurant</i>
                                                <i class="fas fa-campground"></i>
                                            </div>
                                            <button class="btn_cuAddScenery--767 cuBtn__styleClear">
                                                <i class="material-icons">check_box_outline_blank</i>
                                            </button>
                                            <span class="cuCustom__price1">$2,000</span>
                                            <div class="cuCustom__showOption">
                                                <button class="btn_cuAddScenery">
                                                        <i class="material-icons">add</i>
                                                </button>
                                                <button class="btn_cuWatchScenery">
                                                    <i class="material-icons" >search</i>
                                                </button>
                                            </div>
                                        </div>
                                       
                                        <div class="cuCustom__sceneryItem cuScenery__Item3">
                                            <div class="cuCustom__sceneryContent">
                                                <p>安娜普那基地</p>
                                                <i class="material-icons">restaurant</i>
                                                <i class="fas fa-campground"></i>
                                            </div>
                                            <button class="btn_cuAddScenery--767 cuBtn__styleClear">
                                                <i class="material-icons">check_box_outline_blank</i>
                                            </button>
                                            <span class="cuCustom__price1">$2,000</span>
                                            <div class="cuCustom__showOption">
                                                <button class="btn_cuAddScenery">
                                                        <i class="material-icons">add</i>
                                                </button>
                                                <button class="btn_cuWatchScenery">
                                                    <i class="material-icons" >search</i>
                                                </button>
                                            </div>
                                        </div>
                                       
                                        <div class="cuCustom__sceneryItem cuScenery__Item4">
                                            <div class="cuCustom__sceneryContent">
                                                <p>安娜普那基地</p>
                                                <i class="material-icons">restaurant</i>
                                                <i class="fas fa-campground"></i>
                                            </div>
                                            <button class="btn_cuAddScenery--767 cuBtn__styleClear">
                                                <i class="material-icons">check_box_outline_blank</i>
                                            </button>
                                            <span class="cuCustom__price1">$2,000</span>
                                            <div class="cuCustom__showOption">
                                                <button class="btn_cuAddScenery">
                                                        <i class="material-icons">add</i>
                                                </button>
                                                <button class="btn_cuWatchScenery">
                                                    <i class="material-icons" >search</i>
                                                </button>
                                            </div>
                                        </div>
                                       
                                        <div class="cuCustom__sceneryItem cuScenery__Item5">
                                            <div class="cuCustom__sceneryContent">
                                                <p>安娜普那基地</p>
                                                <i class="material-icons">restaurant</i>
                                                <i class="fas fa-campground"></i>
                                            </div>
                                            <button class="btn_cuAddScenery--767 cuBtn__styleClear">
                                                <i class="material-icons">check_box_outline_blank</i>
                                            </button>
                                            <span class="cuCustom__price1">$2,000</span>
                                            <div class="cuCustom__showOption">
                                                <button class="btn_cuAddScenery">
                                                        <i class="material-icons">add</i>
                                                </button>
                                                <button class="btn_cuWatchScenery">
                                                    <i class="material-icons" >search</i>
                                                </button>
                                            </div>
                                        </div>
                                       
                                        <div class="cuCustom__sceneryItem cuScenery__Item6">
                                            <div class="cuCustom__sceneryContent">
                                                <p>安娜普那基地</p>
                                                <i class="material-icons">restaurant</i>
                                                <i class="fas fa-campground"></i>
                                            </div>
                                            <button class="btn_cuAddScenery--767 cuBtn__styleClear">
                                                <i class="material-icons">check_box_outline_blank</i>
                                            </button>
                                            <span class="cuCustom__price1">$2,000</span>
                                            <div class="cuCustom__showOption">
                                                <button class="btn_cuAddScenery">
                                                        <i class="material-icons">add</i>
                                                </button>
                                                <button class="btn_cuWatchScenery">
                                                    <i class="material-icons" >search</i>
                                                </button>
                                            </div>
                                        </div>

                                       
                                    </div>
                                    <div id="btn_cuAddScenery--confirm">確認加入</div>
                                </div>
                            </div>      
                        </div>
                    </div>
                    <!-- 調整風景順序 -->
                    <div class="cuCustom__dropZone">
                        <span class="cuCustom__dropTell" >拖曳可以更改風景順序</span>
                        <div class="cuCustom__dropMask">
                                <div class="cuCustom__dropScenery cuDropScenery__item1">
                                    <div class="cuCustom__sceneryContent">
                                        <p>安娜普那基地</p>
                                        <i class="material-icons">restaurant</i>
                                        <i class="fas fa-campground"></i>
                                    </div>
                                    <span class="cuCustom__price">$2,000</span>
                                    <button class="btn_cuIcon--clear cuBtn__styleClear">
                                        <i class="material-icons">clear</i>
                                    </button>
                                </div>
                                <div class="cuCustom__dropScenery cuDropScenery__item2">
                                    <div class="cuCustom__sceneryContent">
                                        <p>安娜普那基地</p>
                                        <i class="material-icons">restaurant</i>
                                        <i class="fas fa-campground"></i>
                                    </div>
                                    <span class="cuCustom__price">$2,000</span>
                                    <button class="btn_cuIcon--clear cuBtn__styleClear">
                                        <i class="material-icons">clear</i>
                                    </button>
                                </div>
                                <div class="cuCustom__dropScenery cuDropScenery__item3">
                                    <div class="cuCustom__sceneryContent">
                                        <p>安娜普那基地</p>
                                        <i class="material-icons">restaurant</i>
                                        <i class="fas fa-campground"></i>
                                    </div>
                                    <span class="cuCustom__price">$2,000</span>
                                    <button class="btn_cuIcon--clear cuBtn__styleClear">
                                        <i class="material-icons">clear</i>
                                    </button>
                                </div>
                        </div>
                        <!-- btn_查看風景列表 -->
                        <div id="btn_cuCheckScenery">
                            <i class="material-icons">add</i>
                        </div>
                    </div>
        
                </div>
                <div class="cuCtrlBtn">
                    <!-- btn選擇日期及嚮導 -->
                    <input type="submit" id="btn_cuPickTG" class="cuBtn" value="選擇日期及嚮導">
                </div>
            </section>

        
            <!-- 客製化第二步驟（選時間、嚮導） -->
            <section id="cu__step2">
                <div id="cuCustom2">
                    <div>
                        <label for="" class="cuStyle__pick">選擇出發日期</label>
                        <input type="date" id="cuTime__start">
                    </div>
                    <div class="cuStyle__ptb10">
                        <label for="" class="cuStyle__pick">選擇結束日期</label>
                        <input type="date" id="cuTime__end">
                    </div>
                    <!-- <div class="custom-select cu_selectNum1" >
                        <select>
                            <option value="0">請選擇出發日期</option>
                        </select>
                    </div>
                    <div class="custom-select" >
                        <select>
                            <option value="0">請選擇結束日期</option>
                        </select>
                    </div> -->
        
                    <h3>選擇嚮導</h3>
                    <div class="cu__pickGuide">
                        <button id="btn_cuLeft">
                            <i class="material-icons">keyboard_arrow_left</i>
                        </button>
                        <div class="cu__guideList">
                            <div class="cu__guideList--mask">
                                <div class="cu__guideItem cu__guideItem1">
                                    <img src="img/cu_guideItem1.png" alt="">
                                    <h4>Vivian</h4>
                                    <p>擅長高山百岳健行、中級山探勘、高海拔遠征、攀岩極冰攀略有涉獵。</p>
                                </div>
                                <div class="cu__guideItem cu__guideItem2">
                                    <img src="img/cu_guideItem1.png" alt="">
                                    <h4>Vivian</h4>
                                    <p>擅長高山百岳健行、中級山探勘、高海拔遠征、攀岩極冰攀略有涉獵。</p>
                                </div>
                                <div class="cu__guideItem cu__guideItem3">
                                    <img src="img/cu_guideItem1.png" alt="">
                                    <h4>Vivian</h4>
                                    <p>擅長高山百岳健行、中級山探勘、高海拔遠征、攀岩極冰攀略有涉獵。</p>
                                </div>
                            </div>
                        </div>
                        <button  id="btn_cuRight">
                            <i class="material-icons">keyboard_arrow_right</i>
                        </button>
        
                    </div>
                </div>
                <div class="cuCtrlBtn">
                    <!-- btn選擇日期及嚮導 -->
                    <input type="button" id="btn_cuBack" class="cuBtn" value="上一頁">
                    <!-- btn選擇日期及嚮導 -->
                    <input type="submit" id="btn_cuBooking" class="cuBtn" value="訂購行程">
                </div>
            </section>
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
    <script src="js/customized.js"></script>
</body>
</html>