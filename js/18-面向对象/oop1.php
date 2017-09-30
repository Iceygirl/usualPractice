<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title></title>
</head>
<body>
<?php
	class Person{
		function __construct($name,$sex){
			$this->name = $name;
			$this->sex = $sex;
		}
		
		function showName (){
			echo $this->name;
		}
		
		function showSex (){
			echo $this->sex;
		}
	}
	
	$p1 = new Person ('zmx','女');
	$p1->showName();
?>
</body>
</html>