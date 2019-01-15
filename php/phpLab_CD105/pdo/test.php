<?php
    $err="";
try{
    $dsn="mysql:host=localhost;post=3306;dbname=books;charset=utf8";
    $user="root";
    $password="root";
    $options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION );
    $pdo = new PDO($dsn,$user,$password,$options);
    $sql = "select * from products";
    $product = $pdo->query($sql);
    // 是prodRows被fetch
    $prodRows  = $product->fetch();
    
    
    }catch(PDOexception $e){
        $err .="錯誤：".$e ->getMessage()."<br>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if($err!=""){
        echo"<div>$err</div>";
    }else{

    
    ?>
    <table>
    <tr bgcolor="#bfbfef"><th>書號</th><th>書名</th><th>價格</th><th>作者</th></tr>
        <!-- <?php
            while($prodRows=$product->fetchObject()){

        ?>
            
            <tr>
                <td><?php echo $prodRows->psn; ?></td>
                <td><?php echo $prodRows->pname; ?></td>
                <td><?php echo $prodRows->price; ?></td>
                <td><?php echo $prodRows->author; ?></td>
            </tr>
        
        <?php
            }
        }
        ?> -->
                <tr>
        <?php
            foreach($prodRows as $i=>$prodRow){

        ?>
            
			<td><?php echo $prodRow;?></td>
			<!-- <td><?php echo $prodRow["pname"];?></td>
			<td><?php echo $prodRow["price"];?></td>
			<td><?php echo $prodRow["author"];?></td> -->
            
            <?php
            }
            
            ?>
            </tr>
    </table>
</body>
</html>