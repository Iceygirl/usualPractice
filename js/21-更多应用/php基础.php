<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title></title>
</head>
<body>
<?php
$a = 12;
echo 'abs'.'<br/>';
echo $a.'<br/>';
for($i=0;$i<5;$i++){
	echo $i.'<br/>';
}

function show($str){
	echo $str.'<br/>';
}
show('abc');

if($a%2 == 0){
	echo '偶数';
} else {
	echo '奇数';
}
?>
<ul>
	<?php for($i=0;$i<10;$i++){ ?>
	<li><?php echo $i+1; ?></li>
	<?php } ?>
</ul>
</body>
</html>