window.addEventListener("load", () => {
    var web = window.innerWidth;
    // 漢堡設定
    var burger = new Vue({
        el: "#burger",
        methods: {
            bur() {
                if (web < 768) {
                    document.querySelector("#burgerText").style.left = "0%";
                    document.querySelector("#burSpan1").classList.add("animation1");
                    document.querySelector("#burSpan2").classList.add("animation2");
                    document.querySelector("#burSpan3").classList.add("animation1");
                }
            }
        }
    })
    var burgerText = new Vue({
        el: "#burgerText",
        data: {
            web: web
        },
        methods: {
            out() {
                if (web < 768) {
                    document.querySelector("#burgerText").style.left = "100%";
                    document.querySelector("#burSpan1").classList.remove("animation1");
                    document.querySelector("#burSpan2").classList.remove("animation2");
                    document.querySelector("#burSpan3").classList.remove("animation1");
                }
            }
        }
    })
    // 會員專區的子選單
    if (window.innerWidth < 768) {
        var member = document.querySelector("#member");
        var memberclick = false;
        member.addEventListener("click", () => {
            if (!memberclick) {
                for (var i = 0; i <= 3; i++) {
                    var membera = document.getElementsByClassName("member-a")[i];
                    membera.classList.add("member-b");
                    memberclick = true;
                }
            } else {
                for (var i = 0; i <= 3; i++) {
                    var membera = document.getElementsByClassName("member-a")[i];
                    membera.classList.remove("member-b");
                    memberclick = false;
                }

            }
        })
    }

    // 呼叫機器人.addEventListener('click', () => triggerAnimation())
    if(web<768){
        document.querySelector("#index-root").addEventListener('click', () => triggerAnimation());
    }
    // nav的卷軸事件
    // var scr = window.scrollY;
    // var headerdAll = document.querySelector("#headerAll");
    // var burgerText = document.querySelector("#burgerText");
    // if (web > 768) {
    //     window.addEventListener("scroll", () => {
    //         if (scr < window.scrollY) {
    //             headerdAll.style.top = "-60px";
    //             burgerText.style.top = "-60px";
    //         }
    //         else if (scr > window.scrollY) {
    //             headerdAll.style.top = "0px";
    //             burgerText.style.top = "0px";
    //         }
    //         scr = window.scrollY;
    //     })
    // }

    // 搜尋的點擊事件
    var filter = document.querySelector(".filter");
    var search = document.querySelector("#search");
    var on = false;
    var body = document.getElementsByTagName("body")[0];
    search.addEventListener("click", () => {
        if (!on) {
            filter.style.cssText = "top: 6%;left: 15%;display:block";
            on = true;
        }
        else if (on) {
            filter.style.display = "none";
            on = false;
        }
    }, true);
    filter.addEventListener("click", () => {
        filter.style.display = "block";
    }, true);
    body.addEventListener("click", () => {
        filter.style.display = "none";
    }, true);

    document.querySelector("#up").addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    })









    
});




// 機器人加入
var qaList = [
    { Q: "謝謝", A: "不客氣!" },
    { Q: "行程|訂購", A: "你想自行規劃還是官方行程呢?" },
    { Q: "自訂|自行", A: "你有想去的地方嗎?" },
    { Q: "官方", A: "你有看到中意的行程嗎?" },
    { Q: "亞洲", A: "亞洲我們有富士山喜、馬拉雅山- 珠穆朗瑪峰和玉山" },
    { Q: "歐洲", A: "歐洲我們有阿爾卑斯山 -少女峰" },
    { Q: "北美洲", A: "北美洲我們有優勝美地" },
    { Q: "南美洲", A: "南美洲我們推薦百內國家公園、馬丘比丘和聖克魯斯山" },
    { Q: "大洋洲", A: "大洋洲我們有阿斯帕林山" },
    { Q: "非洲", A: "非洲我們有吉力馬札羅山" },
    { Q: "對不起 | 抱歉 | 不好意思", A: "別說抱歉 !|別客氣，儘管說 !" },
    { Q: "可否 | 可不可以", A: "你確定想*?" },
    { Q: "我想", A: "你想要怎樣的*?" },
    { Q: "我要", A: "你為何要*?" },
    { Q: "你是", A: "你認為我是*?" },
    { Q: "認為 | 以為", A: "為何說*?" },
    { Q: "感覺", A: "常有這種感覺嗎?" },
    { Q: "為何不", A: "你希望我*!" },
    { Q: "是否", A: "為何想知道是否*?" },
    { Q: "不能", A: "為何不能*?|你試過了嗎?|或許你現在能*了呢?" },
    { Q: "我是", A: "你好，久仰久仰!" },
    { Q: "甚麼 | 什麼 | 何時 | 誰 | 哪裡 | 如何 | 為何 | 因何", A: "為何這樣問?|為何你對這問題有興趣?|你認為答案是甚麼呢?|你認為如何呢?|你常問這類問題嗎?|這真的是你想知道的嗎?|為何不問問別人?|你曾有過類似的問題嗎?|你問這問題的原因是甚麼呢?" },
    { Q: "原因", A: "這是真正的原因嗎?|還有其他原因嗎?" },
    { Q: "理由", A: "這說明了甚麼呢?|還有其他理由嗎?" },
    { Q: "你好 | 嗨 | 您好", A: "你好，有甚麼問題嗎?" },
    { Q: "或許", A: "你好像不太確定?" },
    { Q: "不曉得 | 不知道", A: "為何不知道?|在想想看，有沒有甚麼可能性?" },
    { Q: "不想 | 不希望", A: "有沒有甚麼辦法呢?|為何不想*呢?|那你希望怎樣呢?" },
    { Q: "想 | 希望", A: "為何想*呢?|真的想*?|那就去做阿?為何不呢?" },
    { Q: "不", A: "為何不*?|所以你不*?" },
    { Q: "請", A: "我該如何*呢?|你想要我*嗎?" },
    { Q: "你", A: "你真的是在說我嗎?|別說我了，談談你吧!|為何這麼關心我*?|不要再說我了，談談你吧!|你自己*" },
    { Q: "總是 | 常常", A: "能不能具體說明呢?|何時?" },
    { Q: "像", A: "有多像?|哪裡像?" },
    { Q: "對", A: "你確定嗎?|我了解!" },
    { Q: "朋友", A: "多告訴我一些有關他的事吧!|你認識他多久了呢?" },
    { Q: "電腦", A: "你說的電腦是指我嗎?" },
    { Q: "難過", A: "別想它了|別難過|別想那麼多了|事情總是會解決的" },
    { Q: "高興", A: "不錯ㄚ|太棒了|這樣很好ㄚ" },
    { Q: "是阿|是的", A: "甚麼事呢?|我可以幫助你嗎?|我希望我能幫得上忙!" },
    { Q: "", A: "我了解|我能理解|還有問題嗎 ?|請繼續說下去|可以說的更詳細一點嗎?|這樣喔! 我知道!|然後呢? 發生甚麼事?|再來呢? 可以多說一些嗎|接下來呢? |可以多告訴我一些嗎?|多談談有關你的事，好嗎?|想多聊一聊嗎|可否多告訴我一些呢?" }

];


function random(n) { // 從 0 到 n-1 中選一個亂數
    return Math.floor(Math.random() * n);
}

function append(line) { // 將 line 放到「對話區」顯示。
    var rb__message = document.getElementById("rb__message");
    // 取出對話框 
    rb__message.innerHTML += '<div class="person_text rbtext__show"> <img src="img/機器人/baseline_person_black_24dp.png"><p>' + line + "</p></div><BR/>" + "\n"; // 加入 line 這行文字，並加入換行 <BR/>\n
    rb__message.scrollTop = rb__message.scrollHeight;
    // document.getElementById("massage").style. 
    if ("rb__message") {
        document.getElementById("rb__message").style.color = "#484848";
    } else if ("message") {
        document.getElementById("rb__message").style.fontFamily = "Microsoft JhengHei";
    } else {
        document.getElementById("rb__massage").style.backgroundcolor = "#ffffff";
    }
    // 捲動到最下方。
}

function append1(line) { // 將 line 放到「對話區」顯示。
    var rb__message = document.getElementById("rb__message");
    // 取出對話框 
    rb__message.innerHTML += "<div class='rbtext__show'>" + line + "<BR/>" + "\n"; // 加入 line 這行文字，並加入換行 <BR/>\n
    rb__message.scrollTop = rb__message.scrollHeight;
    if ("rb__message") {
        document.getElementById("rb__message").style.color = "#484848";
    } else if ("rb__message") {
        document.getElementById("rb__message").style.fontFamily = "Microsoft JhengHei";
    } else {
        document.getElementById("rb__massage").style.backgroundcolor = "#ffffff";
    }
    // 捲動到最下方。
}

function answer() { // 回答問題
    setTimeout(function () { // 停頓 1 到 3 秒再回答問題 (因為若回答太快就不像人了，人打字需要時間)
        append1('<img src="img/logo.png">' + "<p>" + getAnswer() + "</p>");
    }, 1000 + random(2000));
}

function getAnswer() {
    var say = document.getElementById("say").value; // 取得使用者輸入的問句。
    for (var i in qaList) { // 對於每一個 QA 
        try {
            var qa = qaList[i];
            var qList = qa.Q.split("|"); // 取出 Q 部分，分割成一個一個的問題字串 q
            var aList = qa.A.split("|"); // 取出回答 A 部分，分割成一個一個的回答字串 q
            for (var qi in qList) { // 對於每個問題字串 q
                var q = qList[qi];
                if (q == "") // 如果是最後一個「空字串」的話，那就不用比對，直接任選一個回答。
                    return aList[random(aList.length)]; // 那就從答案中任選一個回答
                var r = new RegExp("(.*)" + q + "([^?.;]*)", "gi"); // 建立正規表達式 (.*) q ([^?.;]*)
                if (say.match(r)) { // 比對成功的話
                    tail = RegExp.$2; // 就取出句尾
                    // 將問句句尾的「我」改成「你」，「你」改成「我」。
                    tail = tail.replace("我", "#").replace("你", "我").replace("#", "你");
                    return aList[random(aList.length)].replace(/\*/, tail); // 然後將 * 改為句尾進行回答
                }
            }
        } catch (err) { }
    }
    return "系統維護中"; // 如果發生任何錯誤，就回答「然後呢？」來混過去。
}




const CLASS_CIRCLE = '.rbcircle';
const CLASS_ICON = '.rbicon-elements';
const CLASS_MODAL = '.rbmodal-wrapper';
const CLASS_ICON_ACTIVE = 'js-icon-active';
const CLASS_MODAL_ACTIVE = 'js-modal-active';

const elementCircle = document.querySelector(CLASS_CIRCLE);
const elementIcon = document.querySelector(CLASS_ICON);
const elementModal = document.querySelector(CLASS_MODAL);
const elementInput = document.querySelector('#myInput');

const triggerAnimation = () => {
    const isActive = elementIcon.classList.contains(CLASS_ICON_ACTIVE);
    // console.log(isActive);
    isActive ? (
        elementIcon.classList.remove(CLASS_ICON_ACTIVE),
        elementModal.classList.remove(CLASS_MODAL_ACTIVE)
    ) : (
            elementIcon.classList.add(CLASS_ICON_ACTIVE),
            elementModal.classList.add(CLASS_MODAL_ACTIVE)
        );
}

elementCircle.addEventListener('click', () => triggerAnimation());


document.querySelector("#out").addEventListener("click", () => {
    elementIcon.classList.remove(CLASS_ICON_ACTIVE),
        elementModal.classList.remove(CLASS_MODAL_ACTIVE);
})
document.querySelector("#out1").addEventListener("click", () => {
    elementIcon.classList.remove(CLASS_ICON_ACTIVE),
        elementModal.classList.remove(CLASS_MODAL_ACTIVE);
})
window.addEventListener("click", () => {
    elementIcon.classList.remove(CLASS_ICON_ACTIVE),
        elementModal.classList.remove(CLASS_MODAL_ACTIVE);

}, true);
document.querySelector("#model").addEventListener("click", () => {
    elementIcon.classList.add(CLASS_ICON_ACTIVE),
        elementModal.classList.add(CLASS_MODAL_ACTIVE)

}, true)




function say() { // 當送出鍵按下時，會呼叫這個函數進行回答動作
    // console.log(document.getElementById("say").value);
    append(document.getElementById("say").value);

    // 先將使用者輸入的問句放到「對話區」顯示。
    // input.value="";
    // document.getElementById("say").value="";//輸出後欄位空白,但導致對話判斷失效。
    answer(); // 然後回答使用者的問題。
}
