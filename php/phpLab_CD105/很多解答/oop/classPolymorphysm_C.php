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
} 

class Woman extends Person{
	public function smile(){
		echo $this->name, " :)...<br>";
	}
}

function showHappiness($objects){
  foreach( $objects as $i => $object){
  	$object->smile();
  }
} 

$p[0] = new Person();
$p[0]->name = "Adam";

$p[1] = new Man();
$p[1]->name = "John";


$p[2] = new Woman();
$p[2]->name = "Mary";

showHappiness( $p );
?>      
</body>
</html>