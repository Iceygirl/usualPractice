<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title></title>
<script src="ajax.js"></script>
<script>
window.onload = function (){
	var aInp = document.getElementsByTagName('input');
	var oUser = aInp[0];
	var oPass = aInp[1];
	var oBtn = aInp[2];
	
	oBtn.onclick = function (){
		var data = 'username='+oUser.value+'&password='+oPass.value;
		ajax('get','login_post.php',data,function (str){
			if(str == '1'){
				alert('你好，欢迎回来！');
			} 
			if(str == '0')
			{
				alert('不好意思，输错了！');
			}
		});
	}
};
</script>
</head>
<body>
用户名：<input type="text" name="username"/><br/>
密码：<input type="password" name="password"/><br/>
<input type="submit" value="提交"/>

</body>
</html>