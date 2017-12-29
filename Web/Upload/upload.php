<?php

echo 
	"<meta charset='utf-8'>" .
	"<div style='max-width:400px; margin:auto;'>" .
	"<form action='File_Upload.php' method='post' enctype='multipart/form-data'>" .
	"<label for='Image'>上传图标:</label>" .
	"<input type='file' name='Image' id='Image'><br>" .
	"<label for='Data'>上传软件:</label>" .
	"<input type='file' name='Data' id='Data'><br>" .
	"<input type='submit' name='submit' value='提交'></form></div>";
?>
