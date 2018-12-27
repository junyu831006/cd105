<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>04memberShow.php</title>
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
        <h1><span>U</span><span>Dada</span></h1>
    </div> 


    <div class="box">
                <div class="title">
                        <ul class="list">
                            <li class="item">Name</li>
                            <li class="item">UID</li>
                            <li class="item">Password</li>
                            <li class="item">Email</li>
                            <li class="item">Gender</li>
                            <li class="item">Birthday</li>
                            <li class="item">Tel</li>
                        </ul>
                </div>
                
                
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
                                        <?php if($_GET["memPsw"]=="")
                                            {echo "<span class=\"gg\">none</span>";} 
                                                else {echo $_GET["memPsw"];}?>
                                    </li>
                                    <li class="item">
                                        <?php if($_GET["email"]=="")
                                            {echo "<span class=\"gg\">none</span>";} 
                                                else {echo $_GET["email"];}?>
                                    </li>
                                    <li class="item">
                                        <?php if(isset($_GET["sex"])==false)
                                            {echo "<span class=\"gg\">none</span>";} 
                                                else {echo $_GET["sex"];}?>
                                    </li>
                                    <li class="item">
                                        <?php if($_GET["birthday"]=="")
                                            {echo "<span class=\"gg\">none</span>";} 
                                                else {echo $_GET["birthday"];}?>
                                    </li>
                                    <li class="item">
                                        <?php if($_GET["tel"]=="")
                                            {echo "<span class=\"gg\">none</span>";} 
                                                else {echo $_GET["tel"];}?>
                                    </li>
                                    
                            </ul>


                </div>            
    </div>  
</body>
</html>