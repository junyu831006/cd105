<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>山行者 - 結帳頁面</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
    <script src="js/vue.min.js"></script>
    <script src="js/header.js"></script>
</head>

<body>
    <?php
        include_once('header.php');
    ?>
    <div class="ctStep__title--mobile">
        <div class="row">
            <div class="ctStep__item ctStep--on" id="ctStep1">
                <div class="ctStep__item--circle">1</div>
                <div class="ctStep__item--text">決定日期</div>
            </div>
            <div class="ctStep__line"></div>
            <div class="ctStep__item" id="ctStep2">
                <div class="ctStep__item--circle">2</div>
                <h3 class="ctStep__item--text">資料填寫</h3>
            </div>
            <div class="ctStep__line"></div>
            <div class="ctStep__item" id="ctStep3">
                <div class="ctStep__item--circle">3</div>
                <h3 class="ctStep__item--text">付款結帳</h3>
            </div>
        </div>
    </div>

    <form action="paid.php">
        <!-- 第一步驟選日期 -->
        <div class="ctProduct" id="ctProduct">
            <h2>步驟1 決定日期</h2>
            <div class="row">
                <div class="ctProduct__img">
                    <!-- <img src='img/fuji.jpg' alt=''> -->
                </div>
                <div class="ctProduct__text">
                    <h3 class="ctProduct__text--title">聖母峰-基地營EBC健行14天</h3>
                    <div class="ctProduct__text--content">
                        <p>出發日：2019/01/08 (二)</p>
                        <p>回程日：2019/01/21 (一)</p>
                        <p>天數 : 14日</p>
                        <p>費用 : 173,000/人</p>
                    </div>
                    <a href="javascript:;" class="ctProduct__btn--date btn-sub-s">修改日期</a>
                </div>
            </div>
            <div class="ctMobile__btn">
                <a href="javascript:;" class="ctMobile__btn--front btn-sub-s">上一頁</a>
                <a href="javascript:;" class="ctMobile__btn--next btn-main-s" id="ctProductNextBtn">下一步</a>
            </div>
        </div>



        <!-- 第二步驟填資料 -->
        <div class="ctProfile" id="ctProfile">
            <h2>步驟2 資料填寫</h2>
            <div class="ctCount">
                <div class="row">
                    <span>旅客人數：</span>
                    <div class="ctCountBox">
                        <div class="row">
                            <a href="javascript:;" class="ctCountBox__a--mi">
                                <i class="material-icons">remove</i>
                            </a>
                            <span id="count">1</span>
                            <a href="javascript:;" class="ctCountBox__a--plus">
                                <i class="material-icons">add</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ctContact">
                    <p class="ctContact__title">
                        <span>訂購人資料：</span>
                    </p>

                    <p>
                        <span>訂購人姓名</span>
                        <input type="text" name="name" id="">
                    </p>
                    <p>
                        <span>電子信箱</span>
                        <input type="text" name="" id="">
                    </p>
                    <p>
                        <span>聯絡電話</span>
                        <input type="text" name="" id="">
                    </p>
                </div>
                <div class="ctPassanger">
                    <div class="ctPassanger__tab">
                        <!-- 到時候要用ＪＳ動態生 hidden欄位夾-->
                        <a href="javascript:;">
                            <div class="row">
                                <i class="material-icons">person</i>
                                <i>1</i>
                            </div>
                        </a>
                    </div>
                    <div class="ctPassanger__input">
                        <p>
                            <span>旅客姓名</span>
                            <input type="text" name="" id="">
                        </p>
                        <p>
                            <span>生日日期</span>
                            <input type="date" name="" id="">
                        </p>
                        <p>
                            <span>身分證字號</span>
                            <input type="text" name="" id="">
                        </p>
                        <p>
                            <span>聯絡電話</span>
                            <input type="text" name="" id="">
                        </p>
                    </div>
                </div>
            </div>
            <div class="ctMobile__btn">
                <a href="javascript:;" class="ctMobile__btn--front btn-sub-s" id="ctProfilePreBtn">上一步</a>
                <a href="javascript:;" class="ctMobile__btn--next btn-main-s" id="ctProfileNextBtn">下一步</a>
            </div>
        </div>

        <!-- 第三步付款資訊 -->
        <div class="ctPay" id="ctPay">
            <h2>步驟3 付款資訊</h2>
            <div class="ctDetail">
                <h2>訂單詳情</h2>
                <div class="ctDetail__content">
                    <div class="ctDetail__text">
                        <p>聖母峰-基地營EBC健行14天</p>
                        <p>出發日：2019/01/05 (六)</p>
                        <p>回程日：2019/01/07 (一)</p>
                        <p>費用 : 173,000 /人</p>
                        <p>旅客人數 : <span id="detailCount">1</span>人</p>
                    </div>
                    <div class="ctDetail__cal">
                        <p>
                            <span>總金額 NTD</span>
                            <span class="ctDetail__cal--sum ctDetail__cal--num">173,000</span>
                        </p>
                        <p>
                            <span>紅利折抵 NTD</span>
                            <span class="ctDetail__cal--dis ctDetail__cal--num">0</span>
                        </p>
                    </div>
                    <div class="ctDetail__total">
                        <p>
                            <span>應付金額 NTD</span>
                            <span class="ctDetail__total--num">173,000</span>
                        </p>
                    </div>
                </div>
                <div class="ctDesktop__btn">
                    <button type="submit" class="btn-main-s btn-pay">確認付款</button>
                </div>
            </div>
            <div class="row">
                <div class="ctRule">
                    <h3>訂購條款</h3>
                    <div class="ctRule__text">
                        <p>若於行程前7天退訂，可全額退款。</p>
                        <p>若於行程前3-7天退訂，可半額退款。</p>
                        <p>若於行程前3天內退訂，則是20%退款。</p>
                        <p>若行程取消為天災人禍之因素，無條件全額退款。</p>
                    </div>
                    <div class="ctRule__check">
                        <input type="checkbox" id="memPoint">
                        <label for="memPoint">使用紅利點數折抵</label>
                        <p>您持有的紅利點數為：300點 </p>
                        <p>(每10點可折抵1元，單筆最高折抵500元)</p>
                        <input type="checkbox" id="ctRule">
                        <label for="ctRule">我已詳閱並同意行程購買的條款</label for="ctRule">
                    </div>
                </div>
                <div class="ctCredit">
                    <h3>信用卡資訊</h3>
                    <div class="ctCredit__text">
                        <p>
                            <span>持卡人姓名</span>
                            <span><input type="text" name="" id=""></span>
                        </p>
                        <p>
                            <span>信用卡卡號</span>
                            <span><input type="date" name="" id=""></span>
                        </p>
                        <p>
                            <span>到期月/年</span>
                            <!-- 想用php迴圈做ＱＡＱ -->
                            <span>
                                <select name="" id="" class="ctCredit__select--month" width="72">
                                    <option value="">01</option>
                                    <option value="">02</option>
                                    <option value="">03</option>
                                    <option value="">04</option>
                                </select>
                                <select name="" id="" class="ctCredit__select--year">
                                    <option value="">2019</option>
                                    <option value="">2020</option>
                                    <option value="">2021</option>
                                    <option value="">2022</option>
                                </select>
                            </span>
                        </p>
                        <p>
                            <span>安全碼</span>
                            <span><input type="text" name="" id=""></span>
                        </p>
                        <p>
                            <i class="fab fa-cc-mastercard"></i>
                            <i class="fab fa-cc-visa"></i>
                            <i class="fab fa-cc-jcb"></i>
                        </p>
                    </div>
                </div>

            </div>
            <div class="ctMobile__btn">
                <a href="javascript:;" class="ctMobile__btn--front btn-sub-s" id="ctPayPreBtn">上一步</a>
                <button type="submit" class="ctMobile__btn--next btn-main-s btn-pay">確認付款</button>
            </div>
        </div>
    </form>
    <script src="js/cart.js"></script>
</body>

</html>