<!DOCTYPE html>
<html>
<head>
  <meta  charset="UTF-8">
  <title></title>
</head>
<body>
	<select name="exame">
	<?php
		while($row = $resultado->fetch_assoc()){
		?>
		
		<option value=<?php echo $row["id"];?>><?php echo $row["data"] ." ". $row["nome"];?><option>
	<?php } ?>
	</select>
</body>
</html>