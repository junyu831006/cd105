<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>14政府想拿走的錢</title>
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
        <h1><span>被</span><span>扣稅了</span></h1>
    </div> 


    <div class="box">
                <div class="title">
                        <ul class="list">
                            <li class="item">你的淨所得</li>
                            <li class="item">稅率</li>
                            <li class="item">累進稅差</li>
                            <li class="item">應繳金額</li>
                        </ul>
                </div>
                
                <?php
                    $input = $_GET["memName"];
                    $ratio =0;
                    $nerf =0;
                    $result =0;

                    if($input >= 4230001){
                        $ratio = 0.4;
                        $nerf = 774400;
                    }elseif($input >= 2260001){
                        $ratio = 0.3;
                        $nerf = 351400;
                    }elseif($input >= 1130001){
                        $ratio = 0.2;
                        $nerf = 125400;
                    }elseif($input >= 500001){
                        $ratio = 0.12;
                        $nerf = 35000;
                    }elseif($input >= 0){
                        $ratio = 0.05;
                        $nerf = 0;
                    }
                    $result = $input * $ratio - $nerf;
                ?>

                <div class="detail">
             
                            <ul class="list">
                                    <li class="item">
                                        <?php if($_GET["memName"]=="")
                                            {echo "<span class=\"gg\">none</span>";} 
                                                else echo $input?>
                                    </li> 
                                    <li class="item">
                                        <?php if($_GET["memName"]=="")
                                            {echo "<span class=\"gg\">none</span>";} 
                                                else echo $ratio?>
                                    </li>
                                    <li class="item">
                                        <?php if($_GET["memName"]=="")
                                            {echo "<span class=\"gg\">none</span>";} 
                                                else echo $nerf?>
                                    </li>
                                    <li class="item">
                                        <?php if($_GET["memName"]=="")
                                            {echo "<span class=\"gg\">none</span>";} 
                                                else echo $result?>
                                    </li>                                 
                            </ul>


                </div>            
    </div>  
</body>
</html>