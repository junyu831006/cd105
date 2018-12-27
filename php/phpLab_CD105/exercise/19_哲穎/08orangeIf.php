<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>08你的橘子分級精選</title>
    <style>
                *{
            margin: 0;
            padding: 0;
            font-family: 'Courier New', Courier, monospace;
            /* outline: 1px solid hsl(0deg, 100%, 50%); */
        }

        ul{
            list-style: none;
        }

        .banner{
            width: 960px;
            margin: 0 auto;
            text-align: center;   
            font-size: 60px;
            margin-top: 40px;

        }

        .box{
            width: 960px;
            margin: 0 auto;
        }
        
        .box::after{
            content: "";
            display: block;
            clear: both;
        }
        .title, .detail{
            width: 460px;
            float: left;
            font-size: 30px;
            vertical-align: middle;
            padding-top: 40px;
        }

        .title{
            text-align: right;
            padding-right: 20px;
        }

        input{
            /* padding-top: 9px; */
            font-size: 20px;
            /* line-height: 14px; */
            border: hidden;
            border-bottom: #333 1px solid;
        }


        /* .item::after{
            content:"";
            display:block;
            height:56px;
        } */
        /* li{
            border-bottom: 2px #00baff solid;
        } */

        .btn{
            margin-top: 40px;
        }
        .btn > input{
            /* padding-right:  10px; */
            width: 80px;
            font-size: 20px;
            vertical-align: middle;
            padding: 5px 5px 5px 5px;
            border-radius:5px;
            border: none;
        }

        li{
            padding-top: 20px;
        }

            .banner span+span{
            border:#333 solid 1px;
            background-color: #333;
            color: #fff;
            border-radius: 30px;
        }

        .gg{
            color: #999;
        }
 
        .detail li::after{
               content:"";
               display:block;
               border-bottom: 1px solid #ccc;
               width:60%;
        }

        .detail li:hover::after{
            border-color:#999;
            border-bottom: 2px solid #999;
            transition-duration:0.1s;
            transition: 0.25s;
        }

    </style>
</head>
<body>



    <div class="banner">
        <h1><span>買完</span><span>橘子</span></h1>
    </div> 


    <div class="box">
                <div class="title">
                        <ul class="list">
                            <li class="item">等級</li>
                            <li class="item">公斤</li>
                            <li class="item">小計</li>
                        </ul>
                </div>
                

                <?php
                    $level = $_GET["memName"];
                    $kg = $_GET["memId"];
                    $price = 0;
                    if($level == 1){
                        if($kg<=40){
                            $price = 30;
                        }elseif($kg>40 && $kg<=100){
                            $price =25;
                        }elseif($kg>100){
                            $price = 20;
                        }
                    }elseif($level == 2){
                        if($kg<=40){
                            $price = 25;
                        }elseif($kg>40 && $kg<=100){
                            $price =20;
                        }elseif($kg>100){
                            $price = 15;
                        }                        
                    }elseif ($level == 3) {
                        if($kg<=40){
                            $price = 20;
                        }elseif($kg>40 && $kg<=100){
                            $price =15;
                        }elseif($kg>100){
                            $price = 10;
                        }                         
                    }
                ?>
                
                <div class="detail">
             
                            <ul class="list">
                                    <li class="item">
                                        <?php if($_GET["memName"]=="")
                                            {echo "<span class=\"gg\">none</span>";} 
                                                else {echo $_GET["memName"];}?>
                                    </li>
                                    <li class="item">
                                        <?php if($_GET["memId"]=="")
                                            {echo "<span class=\"gg\">none</span>";} 
                                                else {echo $_GET["memId"];}?>
                                    </li>
                                    <li class="item">
                                        <?php 
                                        // if ($_GET["memName"] * $_GET["memId"]<=500)
                                        // echo  $_GET["memName"] * $_GET["memId"], "  元";
                                        // elseif($_GET["memName"] * $_GET["memId"]<=1000 && $_GET["memName"] * $_GET["memId"]>500){
                                        //     echo $_GET["memName"] * $_GET["memId"]*0.9,"  元", "  已打9折";}
                                        // elseif($_GET["memName"] * $_GET["memId"]>1000){
                                        //     echo $_GET["memName"] * $_GET["memId"]*0.7,"  元", "  已打7折";
                                        // }
                                        echo $price * $kg,"元  ", "( ",$price," 元/公斤 )"
                                        ?>
                                    </li>                                    
                            </ul>


                </div>            
    </div>  
</body>
</html>