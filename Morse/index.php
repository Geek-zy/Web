<!DOCTYPE html>
<html>
<head>  
<title>摩尔斯密码加密解密</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery-1.9.1.min.js"></script>
<script src="horse.min.js"></script>
<script src="mor.min.js"></script>
<script src="Morse.js"></script>
</head>  
<body> 
	<textarea placeholder="贴入要转换的字符或者摩斯密码" id="morse_input"></textarea>
	<div>
		<button class='primary small' onclick="javascript:encode_morse_zh();">加密摩斯密码</button>
		<button class='success small' onclick="javascript:decode_morse_zh();">解密摩斯密码</button>
	</div>
	<div id="morse_output"></div>
</script>
</body>  
</html>
