
// TweenMax.fromTo(".box_01",2,{
//     x:100,
//     y:200,
//     opacity:.4,
    
// },{
//     x:400,
//     t:200,
//     opacity:1,
//     rotation: 360,
//     // repeat:2,
//     repeatDelay:2,
// })
TweenMax.to(".box_01",2,{
    rotationY: 360,
    transformOrigin:"left 50% -200",
    transformPerspective:600,
    // repeat: -1
})
TweenMax.fromTo(".txt",1,{
    y:-100,
},{
    y:0,
})

//var controller只要寫一次
var controller = new ScrollMagic.Controller();

//宣告動畫tweenMax
var an_01=TweenMax.to(".scrollbox",1,{
    // x:1000,
    // y:600,
    rotationX: 180,
    // transformPerspective: 100,
})
var an_03=TweenMax.to(".scrollbox_top",1,{
    // x:1000,
    // y:600,
    rotationX: 180,
    // transformPerspective: 100,
})

//場景
var scene = new ScrollMagic.Scene({
    //觸發點id
    triggerElement: '#aaa',
    //動畫切成幾格，單位是px
    duration:300,
    //延遲多久觸發
    offset:200,
})
//setTween（嵌入動畫）
.setTween([an_01,an_03])
.addIndicators()
.addTo(controller);

//


// var an_02= new TimelineMax();

// an_02.fromto('s4_title',2,{
//     x:0,
// },{
//     x:100,
// })