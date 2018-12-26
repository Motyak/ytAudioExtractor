<!DOCTYPE html>
<html>
<body>
<!-- 
<form action="action.php" method="post">
Url: <input type="text" name="url"><br>
<input type="submit" name="envoyer" value="Envoyer"><br>
</form>
-->

<?php
$url=$_POST["url"];
$url=escapeshellarg($url);
$cmd="./script.sh " . $url;
shell_exec($cmd);
?>

<a href="bidule.m4a" download>
  <img border="0" src="download.jpg">
</a>

<!-- <audio controls>
  <source src="bidule.mp3" type="audio/mpeg">
</audio> --> 

</body>
</html>
