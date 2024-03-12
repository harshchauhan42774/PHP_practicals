<!DOCTYPE html>
<html>
<head>
    <title>calulator</title>
</head>
<body>

    <form  method="post">
        enter the value of a :<input type ="number " name="number"><br><br>
        submit: <input type ="submit" name ="submit" value="submit"><br><br>
    </form>
</body>
</html>

<?php
function Fibonacci($number){
    if ($number == 0)
        return 0;
    else if ($number == 1)
        return 1;
    else
        return (Fibonacci($number-1) + Fibonacci($number-2));
}
$number=isset($_POST["number"])?$_POST["number"]:0;
for ($counter = 0; $counter < $number; $counter++){

    echo Fibonacci($counter),"        ";
}
?>
