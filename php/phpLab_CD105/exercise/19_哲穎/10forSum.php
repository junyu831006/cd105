<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>10那些你很困擾的數學</title>
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
        <h1><span>算</span><span>完了</span></h1>
    </div> 


    <div class="box">
                <div class="title">
                        <ul class="list">
                            <li class="item">你的正整數</li>
                            <li class="item">總和</li>
                            <li class="item">奇數和</li>
                            <li class="item">偶數和</li>
                        </ul>
                </div>
                
                <?php
                    $int = $_GET["memName"];
                    $sum =0;
                    $ggSum =0;
                    $ooSum =0;


                    for ($i=1; $i <= $int ; $i++) { 
                        $sum += $i;
                    }

                    for ($j=1; $j <= $int ; $j+=2) { 
                        $ggSum += $j;
                    }

                    for($k=0; $k <= $int ; $k+=2){
                        $ooSum += $k;
                    }
                ?>

                <div class="detail">
             
                            <ul class="list">
                                    <li class="item">
                                        <?php if($_GET["memName"]=="")
                                            {echo "<span class=\"gg\">none</span>";} 
                                                else echo $int?>
                                    </li> 
                                    <li class="item">
                                        <?php if($_GET["memName"]=="")
                                            {echo "<span class=\"gg\">none</span>";} 
                                                else echo $sum?>
                                    </li>
                                    <li class="item">
                                        <?php if($_GET["memName"]=="")
                                            {echo "<span class=\"gg\">none</span>";} 
                                                else echo $ggSum?>
                                    </li>
                                    <li class="item">
                                        <?php if($_GET["memName"]=="")
                                            {echo "<span class=\"gg\">none</span>";} 
                                                else echo $ooSum?>
                                    </li>                                 
                            </ul>


                </div>            
    </div>  
</body>
</html>