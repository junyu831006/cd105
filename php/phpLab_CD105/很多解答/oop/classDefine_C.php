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
	const FILLING = "喜怒哀樂";
	public $name;
	private $birthday;

	public function smile(){
		echo $this->name, "XDD...<br>";
	}
}  

$p1 = new Person();
$p1->name = "Adam";
$p1->smile();   

$p2 = new Person();
$p2->name = "Helen";
$p2->smile("哈");

echo Person::FILLING;
?>      

</body>
</html>