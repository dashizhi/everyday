<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<form action="doup" method="get">
		<table>
			<tr>
				<td>标题</td>
				<td><input type="text" name="biaoti" value="<?php echo $data['biaoti']?>"></td>
			</tr>
			<tr>
				<td>内容</td>
				<td><input type="text" name="content" value="<?php echo $data['content']?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $data['id']?>"></td>
				<td><input type="submit" value="更改"></td>
			</tr>
		</table>
	</form>
</body>
</html>