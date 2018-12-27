<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>19那個陣列組成的通訊錄</title>
</head>
<body>
    <?php
        //寫法一:資料縱向為一組
        $no=array("學號",94951001,94951002,94951003);
        $name=array("姓名","董董董","阿莫斯","嘉霖桑");
        $tel=array("電話","0911666666","0922777777","0933888888");
        $addr=array("地址","台灣某處對吧","美國某處是吧","日本某處ㄝ嘿");

        $arr_all=array($no,$name,$tel,$addr);
    ?>
    <h3>縱向資料一組</h3>
    <table>
        <?php
            for($i=0;$i<count($no);$i++){
                echo "<tr>";
                for ($j=0; $j < count($arr_all); $j++) { 
                    echo "<td>",$arr_all[$j][$i],"</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>


<hr>


<?php
//寫法二：資料橫向為一組
// $no=array("學號",94951001,94951002,94951003);
// $name=array("姓名","董董董","阿莫斯","嘉霖桑");
// $tel=array("電話","0911666666","0922777777","0933888888");
// $addr=array("地址","台灣某處對吧","美國某處是吧","日本某處ㄝ嘿");

$title=array("學號","姓名","電話","地址");
$a=array(94951001,"董董董","0911666666","台灣某處對吧");
$b=array(94951002,"阿莫斯","0922777777","美國某處是吧");
$c=array(94951003,"嘉霖桑","0933888888","日本某處ㄝ嘿");

$arr_all=array($title,$a,$b,$c);
?>

<h3>橫向資料一組</h3>
<table>
<?php
    for($i=0;$i<count($arr_all);$i++){
        echo "<tr>";
        for ($j=0; $j < count($a); $j++) { 
            echo "<td>",$arr_all[$i][$j],"</td>";
        }
        echo "</tr>";
    }
?>
</table>


<hr>


<?php
//寫法三：二維關聯陣列之類的隨便啦+資料縱向為一組

// $title=array("學號","姓名","電話","地址");
// $a=array(94951001,"董董董","0911666666","台灣某處對吧");
// $b=array(94951002,"阿莫斯","0922777777","美國某處是吧");
// $c=array(94951003,"嘉霖桑","0933888888","日本某處ㄝ嘿");

//換個名字
$no_wtf=array(94951001,94951002,94951003);
$name_wtf=array("董董董","阿莫斯","嘉霖桑");
$tel_wtf=array("0911666666","0922777777","0933888888");
$addr_wtf=array("台灣某處對吧","美國某處是吧","日本某處ㄝ嘿");

$arr_wtf=array("學號"=>$no,"姓名"=>$name,"電話"=>$tel,"地址"=>$addr);
?>

<h3>二維關聯陣列之類的有key值+資料縱向為一組</h3>

<h4>硬要塞兩個值做控制+foreach</h4>
<table>
    <?php
        foreach($arr_wtf as $key => $value){
            echo "<tr>";
            foreach($arr_wtf[$key] as $key2 => $value2 ){
                echo "<td>",$arr_wtf[$key][$key2],"</td>";
            }
            echo "</tr>";
        }
    ?>
</table>

<h4>直接value啦+foreach</h4>
<table>
    <?php
        foreach($arr_wtf as $key => $value){
            echo "<tr>";
            foreach($arr_wtf[$key] as $key2 => $value2 ){
                // echo "<td>",$arr_wtf[$key][$key2],"</td>";
                echo "<td>",$value2,"</td>";
            }
            echo "</tr>";
        }
    ?>
</table>


<hr>
<h3>縱向資料為一組但是轉置成橫向  函數array_map(null,....arr_n)</h3>
<h4>直接value啦+foreach</h4>
<table>
    <?php
    //直接用$arr_all,懶得再打一次
        array_map(null,$arr_all);
        // print_r($arr_all);

        foreach($arr_all as $key=>$value){
            echo "<tr>";
            foreach($value as $key2=>$value2){
                echo "<td>", $value2 ,"</td>";
            }
            echo "</tr>";
        }
       
    ?>
</table>




</body>
</html>




