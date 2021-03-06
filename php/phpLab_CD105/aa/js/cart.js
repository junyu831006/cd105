function $(id) {
    return document.getElementById(id);
}
// 初始寬度
var winWidth = document.body.clientWidth;
var currentWin = winWidth;
//改變寬度
window.addEventListener('resize', ctResize, false);
if (winWidth < 768) {
    $('ctProfile').style.display = 'none';
    $('ctPay').style.display = 'none';
}
function ctResize() {
    // console.log(winWidth);
    winWidth = document.body.clientWidth;
    //看有沒有被按全螢幕
    if (winWidth == window.screen.width) {
        $('ctProduct').style.display = 'block';
        $('ctProfile').style.display = 'block';
        $('ctPay').style.display = 'block';

    }
    //本來就>768 拉往小768 要藏
    //本來<768 拉往小768 不動
    //本來就>768 拉往大768 不動
    //本來<768 拉往大768 全開
    if (winWidth < 768 && currentWin > 768) {
        $('ctProfile').style.display = 'none';
        $('ctPay').style.display = 'none';
    }
    else if ((winWidth > 768 && currentWin > 768)) {
        $('ctProduct').style.display = 'block';
        $('ctProfile').style.display = 'block';
        $('ctPay').style.display = 'block';
    }
    currentWin = winWidth;
}
//如果從原本的小size但拉不到768的時候會全部吃不到
function ctScrollTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth',
    });
}
var ctSteps = document.querySelectorAll('.ctStep__item');
var ctStepLine = document.querySelectorAll('.ctStep__line');

//根據step正在哪頁改變的簡寫
function ctNextStep(i) {
    ctSteps[i + 1].classList.add("ctStep--on");
    ctStepLine[i].classList.add("ctStep__line--on");
    ctScrollTop();
}
function ctPreStep(i) {
    ctSteps[i].classList.remove("ctStep--on");
    ctStepLine[i - 1].classList.remove("ctStep__line--on");
    ctScrollTop();
}
$("ctProductNextBtn").addEventListener('click', nextToFile, false);
function nextToFile() {
    $('ctProfile').style.display = 'block';
    $('ctProduct').style.display = 'none';
    ctNextStep(0);
}

$("ctProfileNextBtn").addEventListener('click', nextToPay, false);
function nextToPay() {
    $('ctProfile').style.display = 'none';
    $('ctPay').style.display = 'block';
    ctNextStep(1);
}


$("ctProfilePreBtn").addEventListener('click', preToProduct, false);
function preToProduct() {
    $('ctProduct').style.display = 'block';
    $('ctProfile').style.display = 'none';
    ctPreStep(1);
}

$("ctPayPreBtn").addEventListener('click', preToFile, false);
function preToFile() {
    $('ctProfile').style.display = 'block';
    $('ctPay').style.display = 'none';
    ctPreStep(2);
}

window.addEventListener('fullscreen', ctResize, false);


//旅客人數
var count = document.querySelector('#count');
var detailCount = document.querySelector('#detailCount');
var add = document.querySelector('.ctCountBox__a--plus');
var mi = document.querySelector('.ctCountBox__a--mi');
var passengerTab = document.querySelector('.ctPassanger__tab');
add.addEventListener('click', addPassanger, false);
mi.addEventListener('click', miPassanger, false);

function addPassanger() {
    //乘客人數
    if (count.innerHTML == 5) {
        return;
    }
    count.innerHTML = parseInt(count.innerHTML) + 1;
    let a = document.createElement('a');
    a.setAttribute('herf', 'javascript:;');
    let div = document.createElement('div');
    div.setAttribute('class', 'row');
    let i1 = document.createElement('i');
    i1.setAttribute('class', 'material-icons');
    i1.innerText = 'person';
    let i2 = document.createElement('i');
    i2.innerText = count.innerHTML;
    detailCount.innerHTML = count.innerHTML;
    div.append(i1);
    div.append(i2);
    a.append(div);
    passengerTab.append(a);

    //呼叫改變金額函數
    newTotal();
}
function miPassanger() {
    if (count.innerHTML == 1) {
        return;
    }
    count.innerHTML = parseInt(count.innerHTML) - 1;
    passengerTab.removeChild(passengerTab.lastChild);

    //呼叫改變金額函數
    newTotal();
}

var total = document.querySelector('.ctDetail__total--num');
var sum = document.querySelector('.ctDetail__cal--sum');
var dis = document.querySelector('.ctDetail__cal--dis');
function newTotal() {
    var tmp = 173000 * count.innerHTML;
    var price = tmp.toString();
    var str = (tmp + parseInt(dis.innerHTML)).toString();
    //在倒數第三個位置插入","
    price = price.slice(0, 3) + ',' + price.slice(3);
    str = str.slice(0, 3) + ',' + str.slice(3);
    sum.innerHTML = price;
    total.innerHTML = str;
}

//紅利點數是否折抵
var memPoint = document.querySelector('#memPoint');
memPoint.addEventListener('click', function () {
    if (memPoint.checked) {
        dis.innerHTML = '-300';
    }
    else {
        dis.innerHTML = 0;
    }
    //呼叫改變金額函數
    newTotal();
}, false);


//檢查訂購條款是否被勾選
var ctRule = document.querySelector('#ctRule');
var btnPay = document.querySelectorAll('.btn-pay');
for (let i = 0; i < btnPay.length; i++) {
    btnPay[i].addEventListener('click', function (e) {
        e.preventDefault();
        if (!ctRule.checked) {
            alert('請詳閱並同意訂購條款');
        }
        else {
            window.location = 'paid.php';
        }
    }, false);
}