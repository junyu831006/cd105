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

	public function __construct( $data){
		//初始化物件的狀態
		$this->name = $data;
	}

	public function smile(){
		echo $this->name, "XDD...<br>";
	}
}  

$p1 = new Person("Adam");

$p1->smile();
$p1 = null;

?>      
</body>
</html>