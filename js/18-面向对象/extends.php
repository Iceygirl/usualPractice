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
	
	class Worker extends Person{
		function __construct($name,$sex,$job){
			parent::__construct($name,$sex);
			$this->job = $job;
			
		}
		
		function showJob (){
			echo $this->job;
		}
	}
	
	$w1 = new Worker('zmx','女','前端开发');
	$w1->showSex();
	$w1->showJob();
?>
</body>
</html>