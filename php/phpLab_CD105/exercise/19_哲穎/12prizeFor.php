<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>12可以重複的摸彩金</title>
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

        .prize {
            width:500px;
            margin: auto;
            padding-top: 60px;
            font-size:25px;
            text-align:center;
        }
            


    </style>
</head>
<body>



    <div class="banner">
        <h1><span>開</span><span>獎</span></h1>
    </div> 

    <div class="prize">
    <?php
        $end = 10;
        $sum=0;
        $price=0;
        for ($i=1; $i <= $end ; $i++) { 
            $price=mt_rand(0,10);
            echo "第",$i,"次  ","  金額= ",$price," 佰元<br>";
            $sum += $price;
        }
        echo "總金額= ", $sum*100, " 元<br>" 
    ?>

    </div>
    
    
  
   
</body>
</html>