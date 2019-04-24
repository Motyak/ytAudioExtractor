<?php
if(isset($_GET['id']))
    $output=shell_exec("./script.sh " . escapeshellarg($_GET['id']));
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>yt2mp3</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script type="text/javascript">
function parseId(url)
{
    return url.substring(url.indexOf('?v',12)+3);
}
$(document).ready(function(){
    $('form').submit(function(){
        $('input[name=id]').attr('value',parseId($('#url').val()));
    });
});
</script>
<style>
</style>
</head>
<body>
<form>
<label for="lblUrl"><b>URL :</b></label>
<input type="text" id="url" required maxlength='50' placeholder='Ex: https://www.youtube.com/watch?v=xCKRI_3q13Q'><br>
<input type="hidden" name="id" value="">
<input type="submit"><br>
</form>
<?php
if(isset($_GET['id']))
    echo '<a href="', $output , '" download><img src="http://www.stickpng.com/assets/images/586abf79b6fc1117b60b2755.png"></a>';
?>
</body>
</html>