<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/product.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.22/vue.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  <script src="js/header.js"></script>
  <title>Document</title>
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
  <div id="breadcrumb">
    <span>首頁</span>
    <span> <i class="material-icons">keyboard_arrow_right</i> 登山行程</span>
    <span> <i class="material-icons">keyboard_arrow_right</i> 聖母峰-基地營EBC健行14天</span>
  </div>
  <div class="product__main">
    <div class="product__imgContainer">
      <div class="product__img"></div>
      <!-- <img src="img/himalaya1.jpg" alt="Himalaya Banner"> -->
    </div>
    <div class="product__info">
      <div class="product__share">
        <img src="img/instagram.png" alt="Instagram">
        <img src="img/twitter.png" alt="Twitter">
        <img src="img/facebook.png" alt="Facebook">
      </div>
      <h1>聖母峰-基地營EBC健行14天</h2>
      <p>洲&nbsp&nbsp&nbsp名 : 
        <span>亞洲</span>
      </p>
      <p>天&nbsp&nbsp&nbsp數 : 
        <span>14天</span>
      </p>
      <p>難易度 : 
        <span>
          <i class="fas fa-hiking"></i>
          <i class="fas fa-hiking"></i>
          <i class="fas fa-hiking"></i>
        </span>
      </p>
      <p>評&nbsp&nbsp&nbsp價 : 
        <span>
          <img src="img/tree.png" alt="rate">
          <img src="img/tree.png" alt="rate">
          <img src="img/tree.png" alt="rate">
          <img src="img/tree.png" alt="rate">
          <img src="img/tree.png" alt="rate">
          <span>5.0 (150)</span>
        </span>
      </p>
      <p class="product__price">$173,000 NTD</p>
      <button class="btn-main-s checkTime">查看時間</button>
    </div>
  </div>
  <div class="product__weather">
    <div class="weather">
      <div class="icon sun-shower">
        <div class="cloud"></div>
        <div class="sun">
          <div class="rays"></div>
        </div>
        <div class="rain"></div>
      </div>
      <p class="weather--highTemp">24°</p>
      <p class="weather--lowTemp">11°</p>
      <p class="weather--date">Jan 5</p>
    </div>
    
    <div class="weather">
      <div class="icon thunder-storm">
        <div class="cloud"></div>
        <div class="lightning">
          <div class="bolt"></div>
          <div class="bolt"></div>
        </div>
      </div>
      <p class="weather--highTemp">24°</p>
      <p class="weather--lowTemp">11°</p>
      <p class="weather--date">Jan 5</p>
    </div>
    
    <div class="weather">
      <div class="icon cloudy">
        <div class="cloud"></div>
        <div class="cloud"></div>
      </div>
      <p class="weather--highTemp">24°</p>
      <p class="weather--lowTemp">11°</p>
      <p class="weather--date">Jan 5</p>
    </div>
    
    <div class="weather">
      <div class="icon flurries">
        <div class="cloud"></div>
        <div class="snow">
          <div class="flake"></div>
          <div class="flake"></div>
        </div>
      </div>
      <p class="weather--highTemp">24°</p>
      <p class="weather--lowTemp">11°</p>
      <p class="weather--date">Jan 5</p>
    </div>
    
    <div class="weather">
      <div class="icon sunny">
        <div class="sun">
          <div class="rays"></div>
        </div>
      </div>
      <p class="weather--highTemp">24°</p>
      <p class="weather--lowTemp">11°</p>
      <p class="weather--date">Jan 5</p>
    </div>
    
    <div class="weather">
      <div class="icon rainy">
        <div class="cloud"></div>
        <div class="rain"></div>
      </div>
      <p class="weather--highTemp">24°</p>
      <p class="weather--lowTemp">11°</p>
      <p class="weather--date">Jan 5</p>
    </div>

    <div class="product--weather__tempConversion">
      <input type="radio" name="tempCon" id='celcius' hidden checked><label for="celcius">攝氏</label>
      <input type="radio" name="tempCon" id='fahrenheit' hidden><label for="fahrenheit">華氏</label>
      
    </div>
  </div>

  <div id="product__submenu">
    <div class="product__wrap">
      <ul>
        <li><a href="#product__itineraryTitle">行程介紹</a></li>
        <li><a href="#product__routeTitle">路線介紹</a></li>
        <li><a href="#product__timeTitle">行程時間</a></li>
        <li><a href="#product__guideTitle">嚮導介紹</a></li>
        <li><a href="#product__reviewTitle">旅客評價</a></li>
      </ul>
      <div class="product__submenuPrice">
        <p class="product__price">$173,000 NTD</p>
        <button class="btn-main-s checkTime">查看時間</button>
      </div>
    </div>
  </div>

  <section class="product__wrap">
    <h2 id="product__itineraryTitle">行程介紹</h2>
    <p>聖母峰，又名珠峰，是世界各國登山家夢想的起飛點、一生必去朝聖一次的地方，著名的EBC(Everst Base Camp)尼泊爾聖母峰基地營(5364M)，每年吸引絡繹不絕的登山者前往。途中到處可見6000-8000公尺群山環繞，加上寬大的谷地以及壯闊的冰河地形，尤其是抵達經旗飄揚的EBC時，那份心理的震撼與感動，實是筆墨難容! 除了拜訪EBC，歸途時並前往卡拉帕塔峰(Kalapartar5550M)拜訪，整個健行途中有專業領隊、嚮導人員，並有高度適應等規劃，全程 2 人 1 挑夫負責行李背負，歡迎愛山者一起加入我們的行列。</p>
  </section>

  <section class="product__wrap">
    <h2 id="product__routeTitle">路線介紹</h2>
    <div class="product__routeInfo">
      <div class="product__route">
        <div class="route route1">
          <div class="route__img">
            <img src="img/himalaya-route1.jpg" alt="himalaya-route1">
          </div>
          <div class="route__info">
            <h3>風景點一  <span>Phakding( 2610M )</span></h3>
            <p>搭乘小飛機前往海拔高度2840公尺的盧卡拉Lukla機場，展開喜瑪拉雅山聖母峰基地營之旅。飛行時間大約為35分鐘。抵達盧卡拉機場後，登山導遊將會稍作簡報及介紹此行將協助我們的挑夫。隨後立即整裝健行至巴定Phakding。(本日健行路程約4小時)</p>
            <div class="route__icon">
              <i class="material-icons">airplanemode_active</i>
              <i class="material-icons">restaurant</i>
  	          <i class="material-icons">hotel</i>
            </div>
          </div>
        </div>
        <div class="route route2">
          <div class="route__img">
            <img src="img/himalaya-route1.jpg" alt="himalaya-route1">
          </div>
          <div class="route__info">
            <h3>風景點一  <span>Phakding( 2610M )</span></h3>
            <p>搭乘小飛機前往海拔高度2840公尺的盧卡拉Lukla機場，展開喜瑪拉雅山聖母峰基地營之旅。飛行時間大約為35分鐘。抵達盧卡拉機場後，登山導遊將會稍作簡報及介紹此行將協助我們的挑夫。隨後立即整裝健行至巴定Phakding。(本日健行路程約4小時)</p>
            <div class="route__icon">
              <i class="material-icons">airplanemode_active</i>
              <i class="material-icons">restaurant</i>
  	          <i class="material-icons">hotel</i>
            </div>
          </div>
        </div>
        <div class="route route3">
          <div class="route__img">
            <img src="img/himalaya-route1.jpg" alt="himalaya-route1">
          </div>
          <div class="route__info">
            <h3>風景點一  <span>Phakding( 2610M )</span></h3>
            <p>搭乘小飛機前往海拔高度2840公尺的盧卡拉Lukla機場，展開喜瑪拉雅山聖母峰基地營之旅。飛行時間大約為35分鐘。抵達盧卡拉機場後，登山導遊將會稍作簡報及介紹此行將協助我們的挑夫。隨後立即整裝健行至巴定Phakding。(本日健行路程約4小時)</p>
            <div class="route__icon">
              <i class="material-icons">airplanemode_active</i>
              <i class="material-icons">restaurant</i>
  	          <i class="material-icons">hotel</i>
            </div>
          </div>
        </div>
        <div class="route route4">
          <div class="route__img">
            <img src="img/himalaya-route1.jpg" alt="himalaya-route1">
          </div>
          <div class="route__info">
            <h3>風景點一  <span>Phakding( 2610M )</span></h3>
            <p>搭乘小飛機前往海拔高度2840公尺的盧卡拉Lukla機場，展開喜瑪拉雅山聖母峰基地營之旅。飛行時間大約為35分鐘。抵達盧卡拉機場後，登山導遊將會稍作簡報及介紹此行將協助我們的挑夫。隨後立即整裝健行至巴定Phakding。(本日健行路程約4小時)</p>
            <div class="route__icon">
              <i class="material-icons">airplanemode_active</i>
              <i class="material-icons">restaurant</i>
  	          <i class="material-icons">hotel</i>
            </div>
          </div>
        </div>
        <div class="route route5">
          <div class="route__img">
            <img src="img/himalaya-route1.jpg" alt="himalaya-route1">
          </div>
          <div class="route__info">
            <h3>風景點一  <span>Phakding( 2610M )</span></h3>
            <p>搭乘小飛機前往海拔高度2840公尺的盧卡拉Lukla機場，展開喜瑪拉雅山聖母峰基地營之旅。飛行時間大約為35分鐘。抵達盧卡拉機場後，登山導遊將會稍作簡報及介紹此行將協助我們的挑夫。隨後立即整裝健行至巴定Phakding。(本日健行路程約4小時)</p>
            <div class="route__icon">
              <i class="material-icons">airplanemode_active</i>
              <i class="material-icons">restaurant</i>
  	          <i class="material-icons">hotel</i>
            </div>
          </div>
        </div>
      </div>
      <div class="product__map">
        <img src="img/viewpoint.png" alt="viewpoint">
      </div>
    </div>
  </section>

  <section class="product__wrap">
    <h2 id="product__timeTitle">行程時間</h2>
    <div class="product_timePrice">
      <div class="datepicker">
        <ul class="month">
          <li>一月 2019</li>
          <li>
            <i class="material-icons">keyboard_arrow_left</i>
            <i class="material-icons">keyboard_arrow_right</i>
          </li>
        </ul>
        <ul class="week">
          <li>SUN</li>
          <li>MON</li>
          <li>TUE</li>
          <li>WED</li>
          <li>THU</li>
          <li>FRI</li>
          <li>SAT</li>
        </ul>
        <ul class="day">
          <li class="mute">30</li>
          <li class="mute">31</li>
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li class="start selected">8</li>
          <li class="selected">9</li>
          <li class="selected">10</li>
          <li class="selected">11</li>
          <li class="selected">12</li>
          <li class="selected">13</li>
          <li class="selected">14</li>
          <li class="selected">15</li>
          <li class="selected">16</li>
          <li class="selected">17</li>
          <li class="selected">18</li>
          <li class="selected">19</li>
          <li class="selected">20</li>
          <li class="end selected">21</li>
          <li>22</li>
          <li>23</li>
          <li>24</li>
          <li>25</li>
          <li>26</li>
          <li>27</li>
          <li>28</li>
          <li>29</li>
          <li>30</li>
          <li>31</li>
          <li class="mute">1</li>
          <li class="mute">2</li>
          <span></span>
        </ul>
      </div>
      <div class="product__priceDetail">
        <div id="product__include">
          <h3>費用包含</h3>
          <ul>
            <li> 當地食宿</li>
            <li> 入山規費</li>
            <li> 旅約保險</li>
            <li> 簽證規費</li>
            <li> 行政費用</li>
          </ul>
        </div>
        <div id="product__exclude">
          <h3>費用不包含</h3>
          <ul>
            <li> 護照費用</li>
            <li> 廚師小費</li>
            <li> 自費項目</li>
            <li> 挑夫小費</li>
            <li> 當地嚮導費用</li>
          </ul>
        </div>
        <div id="product__time">
          <h3>行程時間</h3>
          <p id="product__timeStart">
            <i class="material-icons">place</i>
            開始時間
            <span>2019/01/08</span>
          </p>
          <p id="product__timeEnd">
            <i class="material-icons">flag</i>
            結束時間
            <span>2019/01/21</span>
          </p>
        </div>
      </div>
      <form action="cart.php">
        <button type="submit" class="btn-main-s">確認訂購</button>
      </form>
    </div>
  </section>

  <div class="product__guideBackground">
    <section class="product__wrap">
      <h2 id="product__guideTitle">嚮導介紹</h2>
      <div class="product__guide">
        <div class="product__guideImg">
          <img src="img/guide1.jpg" alt="guide1">
        </div>
        <div class="product__guideInfo">
          <h3>登山嚮導</h3>
          <h3 class="product__guideName">Dave Chew</h3>
          <p>擅長高山百岳健行、中級山探勘、中級山探勘、高海拔遠征、攀岩極冰攀略有涉獵、高海拔遠征、攀岩極冰攀略有涉獵、高海拔遠征、攀岩極冰攀略有涉獵。</p>
        </div>
        <div class="product__guideCapability">
          <h3 class="product__guideName">Dave Chew</h3>
          <h3>嚮導綜合能力</h3>
          <canvas id="canvas" width="300" height="300"></canvas>
        </div>
      </div>
    </section>
  </div>

  <div>
    <div class="product__reviewBackground">
      <img src="img/reviewBackground.png" alt="" class="product__reviewBackgroundImg">
    </div>
    <section class="product__wrap">
      <h2 id="product__reviewTitle">旅客評價</h2>
      <div id="totalReview">
        <span id="totalRate">5.0</span>
        <span id="totalRateImg">
          <img src="img/tree.png" alt="rate">
          <img src="img/tree.png" alt="rate">
          <img src="img/tree.png" alt="rate">
          <img src="img/tree.png" alt="rate">
          <img src="img/tree.png" alt="rate">
        </span>
        <span id="numberOfRate">150則評價</span>
      </div>
      <div class="clearfix"></div>
      <div class="product__review">
        <div class="product__customerReview">
          <div class="product__customerImg">
            <img src="img/customer1.jpg" alt="CHARLE CHEN">
          </div>
          <div class="product__customerMain">
            <div class="product__customerInfo">
              <span class="product__customerName">CHARLE CHEN</span>
              <span class="product__customerRate">
                <img src="img/tree.png" alt="rate">
                <img src="img/tree.png" alt="rate">
                <img src="img/tree.png" alt="rate">
                <img src="img/tree.png" alt="rate">
                <img src="img/tree.png" alt="rate">
              </span>
              <span class="product__reviewDate">2018年9月17日</span>
            </div>
            <p class="product__customerReview">對於想參加多次課程的客人，我們也提供相關的折扣。對於初學者，我們鼓勵你至少參加連續3天的課程，甚至連續7天以上。對於想參加多次課程的客人，我們也提供相關的折扣。對於初學者，我們鼓勵你至少參加連續3天的課程，甚至連續7天以上。</p>
          </div>
        </div>
        <div class="product__customerReview">
          <div class="product__customerImg">
            <img src="img/customer1.jpg" alt="CHARLE CHEN">
          </div>
          <div class="product__customerMain">
            <div class="product__customerInfo">
              <span class="product__customerName">CHARLE CHEN</span>
              <span class="product__customerRate">
                <img src="img/tree.png" alt="rate">
                <img src="img/tree.png" alt="rate">
                <img src="img/tree.png" alt="rate">
                <img src="img/tree.png" alt="rate">
                <img src="img/tree.png" alt="rate">
              </span>
              <span class="product__reviewDate">2018年9月17日</span>
            </div>
            <p class="product__customerReview">對於想參加多次課程的客人，我們也提供相關的折扣。對於初學者，我們鼓勵你至少參加連續3天的課程，甚至連續7天以上。對於想參加多次課程的客人，我們也提供相關的折扣。對於初學者，我們鼓勵你至少參加連續3天的課程，甚至連續7天以上。</p>
          </div>
        </div>
        <div class="product__customerReview">
          <div class="product__customerImg">
            <img src="img/customer1.jpg" alt="CHARLE CHEN">
          </div>
          <div class="product__customerMain">
            <div class="product__customerInfo">
              <span class="product__customerName">CHARLE CHEN</span>
              <span class="product__customerRate">
                <img src="img/tree.png" alt="rate">
                <img src="img/tree.png" alt="rate">
                <img src="img/tree.png" alt="rate">
                <img src="img/tree.png" alt="rate">
                <img src="img/tree.png" alt="rate">
              </span>
              <span class="product__reviewDate">2018年9月17日</span>
            </div>
            <p class="product__customerReview">對於想參加多次課程的客人，我們也提供相關的折扣。對於初學者，我們鼓勵你至少參加連續3天的課程，甚至連續7天以上。對於想參加多次課程的客人，我們也提供相關的折扣。對於初學者，我們鼓勵你至少參加連續3天的課程，甚至連續7天以上。</p>
          </div>
        </div>
        <div class="product__customerReview">
          <div class="product__customerImg">
            <img src="img/customer1.jpg" alt="CHARLE CHEN">
          </div>
          <div class="product__customerMain">
            <div class="product__customerInfo">
              <span class="product__customerName">CHARLE CHEN</span>
              <span class="product__customerRate">
                <img src="img/tree.png" alt="rate">
                <img src="img/tree.png" alt="rate">
                <img src="img/tree.png" alt="rate">
                <img src="img/tree.png" alt="rate">
                <img src="img/tree.png" alt="rate">
              </span>
              <span class="product__reviewDate">2018年9月17日</span>
            </div>
            <p class="product__customerReview">對於想參加多次課程的客人，我們也提供相關的折扣。對於初學者，我們鼓勵你至少參加連續3天的課程，甚至連續7天以上。對於想參加多次課程的客人，我們也提供相關的折扣。對於初學者，我們鼓勵你至少參加連續3天的課程，甚至連續7天以上。</p>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  </div>

  <section class="product__wrap">
    <h2>更多推薦行程</h2>
    <div class="product__card">
      <div class="pro-item">
        <div class="pro-item-pic">
          <img src="img/himalaya1.jpg" alt="EBC">
        </div>
        <h4>探索尼泊爾•安娜普娜基地營健行15日</h4>
        <div class="pro-item-view-flex">
          <p>評價：</p>
          <span class="tree"><img src="img/tree.png" alt="tree"></span>
          <span class="tree"><img src="img/tree.png" alt="tree"></span>
          <span class="tree"><img src="img/tree.png" alt="tree"></span>
          <span class="tree"><img src="img/tree.png" alt="tree"></span>
          <span class="tree"><img src="img/tree.png" alt="tree"></span>
        </div>
        <p>天數：15天</p>
        <div class="pro-item-view-flex">
          <p>難易度:</p>
          <span class="hike">
            <i class="fas fa-hiking"></i>
          </span>
          <span class="hike">
            <i class="fas fa-hiking"></i>
          </span>
          <span class="hike">
            <i class="fas fa-hiking"></i>
          </span>    
        </div>
        <div class="pro-item-view">    
          <div class="heart-flex">
            <span class="material-icons">favorite_border</span>
            <span class="heart-text">212</span>  
          </div>
          <span class="price"><h4>NTD76500</h4></span>
        </div>
      </div>
      <div class="pro-item">
        <div class="pro-item-pic">
          <img src="img/himalaya1.jpg" alt="EBC">
        </div>
        <h4>探索尼泊爾•安娜普娜基地營健行15日</h4>
        <div class="pro-item-view-flex">
          <p>評價：</p>
          <span class="tree"><img src="img/tree.png" alt="tree"></span>
          <span class="tree"><img src="img/tree.png" alt="tree"></span>
          <span class="tree"><img src="img/tree.png" alt="tree"></span>
          <span class="tree"><img src="img/tree.png" alt="tree"></span>
          <span class="tree"><img src="img/tree.png" alt="tree"></span>
        </div>
        <p>天數：15天</p>
        <div class="pro-item-view-flex">
          <p>難易度:</p>
          <span class="hike">
            <i class="fas fa-hiking"></i>
          </span>
          <span class="hike">
            <i class="fas fa-hiking"></i>
          </span>
          <span class="hike">
            <i class="fas fa-hiking"></i>
          </span>    
        </div>
        <div class="pro-item-view">    
          <div class="heart-flex">
            <span class="material-icons">favorite_border</span>
            <span class="heart-text">212</span>  
          </div>
          <span class="price"><h4>NTD76500</h4></span>
        </div>
      </div>
      <div class="pro-item">
        <div class="pro-item-pic">
          <img src="img/himalaya1.jpg" alt="EBC">
        </div>
        <h4>探索尼泊爾•安娜普娜基地營健行15日</h4>
        <div class="pro-item-view-flex">
          <p>評價：</p>
          <span class="tree"><img src="img/tree.png" alt="tree"></span>
          <span class="tree"><img src="img/tree.png" alt="tree"></span>
          <span class="tree"><img src="img/tree.png" alt="tree"></span>
          <span class="tree"><img src="img/tree.png" alt="tree"></span>
          <span class="tree"><img src="img/tree.png" alt="tree"></span>
        </div>
        <p>天數：15天</p>
        <div class="pro-item-view-flex">
          <p>難易度:</p>
          <span class="hike">
            <i class="fas fa-hiking"></i>
          </span>
          <span class="hike">
            <i class="fas fa-hiking"></i>
          </span>
          <span class="hike">
            <i class="fas fa-hiking"></i>
          </span>    
        </div>
        <div class="pro-item-view">    
          <div class="heart-flex">
            <span class="material-icons">favorite_border</span>
            <span class="heart-text">212</span>  
          </div>
          <span class="price"><h4>NTD76500</h4></span>
        </div>
      </div>
    </div>
  </section>

  <!-- <footer id="footer">
    <img id="footer-img" src="img/footer.png" alt="footer">
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
    <script src="js/product.js"></script>
  <script>
  var canvas = document.getElementById("canvas");

var gradientBlue = canvas.getContext('2d').createLinearGradient(0, 0, 0, 150);
gradientBlue.addColorStop(0, 'rgba(16, 97, 114, .9)');
gradientBlue.addColorStop(1, 'rgba(93, 183, 197, 0.8)');

// var gradientHoverBlue = canvas.getContext('2d').createLinearGradient(0, 0, 0, 150);
// gradientHoverBlue.addColorStop(0, 'rgba(65, 65, 255, 1)');
// gradientHoverBlue.addColorStop(1, 'rgba(131, 125, 255, 1)');

var gradientRed = canvas.getContext('2d').createLinearGradient(0, 0, 0, 150);
// gradientRed.addColorStop(0, 'rgba(255, 85, 184, 0.9)');
// gradientRed.addColorStop(1, 'rgba(255, 135, 135, 0.8)');

// var gradientHoverRed = canvas.getContext('2d').createLinearGradient(0, 0, 0, 150);
// gradientHoverRed.addColorStop(0, 'rgba(255, 65, 164, 1)');
// gradientHoverRed.addColorStop(1, 'rgba(255, 115, 115, 1)');

var redArea = null;
var blueArea = null;

var shadowed = {
	beforeDatasetsDraw: function(chart, options) {
    chart.ctx.shadowColor = 'rgba(0, 0, 0, 0.25)';
    chart.ctx.shadowBlur = 40;
  },
  afterDatasetsDraw: function(chart, options) {
  	chart.ctx.shadowColor = 'rgba(0, 0, 0, 0)';
    chart.ctx.shadowBlur = 0;
  }
};

// Chart.plugins.register({
//   afterEvent: function(chart, e) {
//  		// Hardcoded hover areas
    
//     // Red chart
//     chart.ctx.beginPath();
//     chart.ctx.moveTo(91, 69);
//     chart.ctx.lineTo(152, 80);
//     chart.ctx.lineTo(192, 75);
//     chart.ctx.lineTo(213, 138);
//     chart.ctx.lineTo(148, 168);
//     chart.ctx.lineTo(105, 126);
//     chart.ctx.fill();
//     chart.ctx.closePath();
    
//     if (chart.ctx.isPointInPath(e.x, e.y)) {
//     	var dataset = window.chart.data.datasets[0];
//       dataset.backgroundColor = gradientHoverRed;
//       window.chart.update();
//       canvas.style.cursor = 'pointer';
//     } else {
//     	var dataset = window.chart.data.datasets[0];
//       dataset.backgroundColor = gradientRed;
//       window.chart.update();
//       canvas.style.cursor = 'default';
//     }
    
//     // Blue chart
//     chart.ctx.beginPath();
//     chart.ctx.moveTo(85, 61);
//     chart.ctx.lineTo(149, 66);
//     chart.ctx.lineTo(224, 63);
//     chart.ctx.lineTo(179, 112);
//     chart.ctx.lineTo(152, 177);
//     chart.ctx.lineTo(121, 117);
//     chart.ctx.fill();
//     chart.ctx.closePath();
    
//     if (chart.ctx.isPointInPath(e.x, e.y)) {
//     	var dataset = window.chart.data.datasets[1];
//       dataset.backgroundColor = gradientHoverBlue;
//       window.chart.update();
//       canvas.style.cursor = 'pointer';
//     } else {
//     	var dataset = window.chart.data.datasets[1];
//       dataset.backgroundColor = gradientBlue;
//       window.chart.update();
//       canvas.style.cursor = 'default';
//     }
//   }
// });

window.chart = new Chart(document.getElementById("canvas"), {
    type: "radar",
    data: {
        labels: ["YDS等級", "體能表現", "求生能力", "應變能力", "帶團經驗"],
        datasets: [{
            label: "Dave Chew",
            data: [60, 70, 40, 100, 90],
            fill: true,
            backgroundColor: gradientBlue,
            borderColor: "transparent",
            pointBackgroundColor: "transparent",
            pointBorderColor: "transparent",
            pointHoverBackgroundColor: "transparent",
            pointHoverBorderColor: "transparent",
          //多元可以感應
            pointHitRadius: 50,
        }]
    },
    options: {
    	legend: {
      	display: false,
      },
      //顯示tooltip
      tooltips: {
      	enabled: true,
        // custom: function(tooltip) {
        // 		var tooltipEl = document.getElementById('tooltip');
        //   	if (tooltip.body) {
        //     	tooltipEl.style.display = 'block';
        //       if (tooltip.body[0].lines && tooltip.body[0].lines[0]) {
        //       	tooltipEl.innerHTML = tooltip.body[0].lines[0];
        //       }
        //     } else {
        //     	setTimeout(function() {
        //     		tooltipEl.style.display = 'none';
        //       }, 500);
        //     }
        // },
      },
      // gridLines: {
      //   display: true
      // },
      scale: {
         ticks: {
           //radar隔線
         		maxTicksLimit: 1,
           //標記數值
            display: false,
         }
      }
    },
    plugins: [shadowed]
});
  </script>
</body>
</html>