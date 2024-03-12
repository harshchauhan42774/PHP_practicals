<!DOCTYPE html>
<html>
<head>
    <title>calulator</title>
</head>
<body>

    <form  method="post">
        enter the number :<input type ="number " name="n"><br><br>
        submit: <input type ="submit" name ="submit" value="submit"><br><br>
    </form>
</body>
</html>
<?php
$n=isset($_POST["n"])?$_POST["n"]:0;
for ($i = 1; $i <= 10; $i++) {
      $ans=$n*$i;
        echo "$n*$i=$ans"."<br>";
    }
    echo "<br>";

?>
