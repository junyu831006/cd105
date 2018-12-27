<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
h2 {
	color:deeppink;
}	
</style>
</head>
<body>
<?php
class Person{

	public $name;
	private $birthday;

	public function smile(){
		echo $this->name, " XDD...<br>";
	}
} 

class Man extends Person{
	public function smile(){
		echo $this->name, " HA! HA!! HA!!!...<br>";
	}
	public function fight(){
		echo $this->name, " 衝! 衝!! 衝!!!...<br>";
	}	
} 

$p1 = new Man();
$p1->name = "Adam";
$p1->smile();
$p1->fight();

$p2 = new Person();
$p2->name = "Helen";
$p2->smile();

?>      
</body>
</html>