<?php
$input=10; //n
$rand_min=1;
$rand_max=100;

$arr=array();
$i=0;
$sum=0;
$max=$rand_min-1; //提摩必須死，變數必須換
$min=$rand_max+1; //你也是

//sum之陣列自己跟自己玩
echo "<h3>陣列自己跟自己玩</h3>";
//弄n個東西進去陣列
while($i<$input){
    $arr[$i]=mt_rand($rand_min,$rand_max);
    $i++;
}

//檢查陣列有什麼鬼而已
print_r($arr); echo"<br>";//echo "<hr>";
echo "總和<br>";
for($i=0;$i<count($arr);$i++){
    $sum += $arr[$i];
}
echo "sum= ",$sum,"<br>";

echo "最大值&最小值<br>";
for($i=0;$i<count($arr);$i++){
    if($arr[$i] > $max){
        $max = $arr[$i];
    }

    if($arr[$i] < $min){
        $min = $arr[$i];
    }else{
        continue;
    }
}
echo "max:",$max,"     min:",$min,"<br><br>";

echo "最後整理在一個迴圈結束這回合<br>";
//清空然後再來一次;
$sum=0;
$max=$rand_min-1; //提摩必須死，變數必須換
$min=$rand_max+1; //你也是
for($j=0;$j<count($arr);$j++){

    $arr[$j]=mt_rand($rand_min,$rand_max);

    $sum += $arr[$j];

    if($arr[$j] > $max){
        $max = $arr[$j];
    }

    if($arr[$j] < $min){
        $min = $arr[$j];
    }else{
        continue;
    }

}
print_r($arr);echo "<br>";
echo "sum= ",$sum ,"   max= ",$max,"    min= ",$min,"<br>";

echo "<hr>";

echo "<h3>接下來是見證函數的時刻</h3>";
echo "<h4>這個的陣列還是用迴圈塞值</h4>";
$arr=array();//清空一下
$i=0;
while($i < $input){
    $arr[$i] = mt_rand($rand_min,$rand_max);
    $i++;
}
// $a=array(); 
// print_r(array_pad($a,10,mt_rand($rand_min,$rand_max)));//array_pad不知道為什麼要跟print_r連用才會給值
//若array_pad單獨存在則不會有錯誤訊息，但也不會把值寫入陣列。你媽。
//對了array_pad下的rand函數隨機產生的值是"產生完之後"依照次數填入陣列，所以只會隨機一次產生一次，就在第一次。
// array_pad($arr,10,"123");//array_pad(指定的陣列,塞滿到幾個元素,被塞入的值)
//結論:還沒想到怎麼 不用迴圈 只用函數 就生出"有指定大小" + "亂數可被指定範圍" 的陣列
echo "排序前<br>";
print_r($arr); echo "<br>";

echo "排序後<br>";
// natsort($arr);//key+value一起移動排序
sort($arr);//只調整value做排序
print_r($arr);echo "<br>";
echo "min: ",$arr[0],"     max: ",$arr[$input-1],"     sum: ",array_sum($arr);
echo "<br><br>";

echo "<h4>用函數塞隨機值</h4>";

// $bb=range(($rand_min),($rand_max));
// $bb=array_flip($bb);
// print_r($bb);echo"<br>";
// $arr=array_rand($bb,10);

$arr=array_rand(array_flip(range(($rand_min),($rand_max))),10);
//自己想不到，只好查別人做法。
//做用range(low,high,step)做出指定大小的陣列 ex: num(1,2,3,...,100)
//對range生出來的陣列元素打亂後取n個，塞進指定陣列中
//array_rand好像不抓重複數
//array_rand(range(low,high,step),number) 這個方法撈出來的陣列，value自動由小到大，還沒想到原因為何。
//下次記得不用在意這種小事，因為你的個人網站首頁還沒開始做，天空就亮了呢。
//早餐想吃漢堡。
//睡前發現異常，太雖了吧幹。
//發現異常:設定在1-100，但是arr的value竟然出現0。
//原因：rand_array抓的是key值，所以有機率有0啦幹。難怪100死都不出現。
//解決方法:用array_flip反轉key跟value。
//注意：array_flip只吃int跟string。同時很多"相同value"被反轉成key時，只取"最後一個value"去做反轉，其他會遺失。(想到再驗證)
print_r($arr); echo "<br>";
echo "min: ",$arr[0],"     max: ",$arr[$input-1],"     sum: ",array_sum($arr);
echo "<br><br>";

?>