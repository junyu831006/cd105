<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>06 Orange</title>
</head>
<body>
	 <?php
      $orange = $_REQUEST["orange"];
      $weight = $_REQUEST["weight"];
      echo "您購買的等級是{$orange}級","<br>";
      echo "您購買的公斤是{$weight}公斤","<br>";

	if($orange == 1 && $weight >= 100){
	  $weight *= 20;
	  echo "小計:{$weight}元";
	}
	elseif($orange == 1 && $weight >= 40){
	 $weight *=25;
	 echo "小計:{$weight}元";
	} 
	elseif($orange == 1 && $weight <=40){
	    $weight *=30;
	    echo "小計:{$weight}元";
	}


 if($orange == 2 && $weight >= 100){
      $weight *= 15;
    echo "小計:{$weight}元";
  }
elseif($orange == 2 && $weight >= 40){
   $weight *=20;
   echo "小計:{$weight}元";
} 
elseif($orange == 2 && $weight <=40){
  $weight *=25;
  echo "小計:{$weight}元";
}

 if($orange == 3 && $weight >= 100){
      $weight *= 10;
      echo "小計:{$weight}元";
    }
  elseif($orange == 3 && $weight >= 40){
      $weight *=15;
      echo "小計:{$weight}元";
  } 
  elseif($orange == 3 && $weight <=40){
      $weight *=20;
      echo "小計:{$weight}元";
  }

?>

</body>
</html>