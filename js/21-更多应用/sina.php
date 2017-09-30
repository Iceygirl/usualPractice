<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title></title>
<style>
* { margin:0; padding:0;}
.box { width:300px; height:300px; border:1px solid #000; overflow:hidden;}
.box div { list-style:none; padding-left:6px; border-bottom:1px dashed #000; filter:alpha("opacity=0"); opacity:0;}
</style>
<script src="ajax.js"></script>
<script src="zmx-prefect.js"></script>
<script>
window.onload = function (){
	var oBtn = document.getElementsByName('btn')[0];
	var oTxt = document.getElementById('txt');
	var oUl = document.getElementsByTagName('div')[0];
	var aLi = oUl.getElementsByTagName('div');
	var data = '';
	
	for(var i=0;i<aLi.length;i++){
		aLi[i].style.filter = 'alpha("opacity=100")';
		aLi[i].style.opacity = 1;
	}
	
	oBtn.onclick = function (){
		
		//与后台连接
		data = 'act=add&content='+oTxt.value;
		ajax('get','sina_get.php',data,function (str){
			
		});
		
		//前台显示
		var oLi = document.createElement('div');
		oLi.innerHTML = oTxt.value;
	
		if(aLi.length == 0){
			oUl.appendChild(oLi);
		} else {
			oUl.insertBefore(oLi,aLi[0]);
		}
		
		var iHeight = oLi.offsetHeight;
		oLi.style.height = 0;
		
		startMove(oLi,{height:iHeight},function (){
			startMove(oLi,{opacity:100});
		});
		
		oTxt.value = ' ';
	};
};
</script>
</head>
<body>
<textarea id="txt" rows="10" cols="40"></textarea>
<input type="button" name="btn" value="发布"/>
<?php
	
	$mysqli = new mysqli("localhost", "root", "", "sina");
	
	$result = $mysqli->query("select * from message order by id desc");
	
?>
<div class="box">
	<?php while(@$row = $result->fetch_row()){ ?>
		<div><?php echo $row[1]; ?></div>
	<?php } ?>
</div>
</body>
</html>