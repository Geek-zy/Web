<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>LED</title>
</head>
<body style="background:#1B1B1B">
<br>

<table border=0 cellSpacing=0 cellPadding=0 width=100% background=img/led.png align=center>
	<tbody>
		<tr>
		<td width=25%>
			<span id="systimeshow" style="color:#FF0000">
			<script language="javascript" src="Time_Date.js"></script>
			<script language="javascript">getCurDate();</script></span>
		</td>

		<td width=75%>
			<marquee style="FILTER: glow(color=red); LINE-HEIGHT: 80px; WIDTH: 100%; 
							FONT-FAMILY: '黑体','黑体_UTF-8','黑体'; COLOR: #ffff00; 
							FONT-SIZE: 40px; text-shadow: #ff0000 1px 1px 0px" scrollAmount=8>
			
			<?php include ("Data.php");?>
			</marquee>
		</td>
		</tr>
	</tbody>
</table>
</body>
</html>
