<!DOCTYPE html>
<html>
<head>
    <title>calulator</title>
</head>
<body>

    <form  method="post">
        enter the value of a :<input type ="number " name="a"><br><br>
        enter the value of b :<input type ="number " name="b"><br><br>
        add: <input type ="submit" name ="calc" id ="add" value="+"><br><br>
        sub: <input type ="submit" name ="calc" id ="sub" value="-"><br><br>
        mul: <input type ="submit" name ="calc" id ="mul" value="*"><br><br>
        divi:<input type ="submit" name ="calc" id ="div" value="/"><br><br>
        moduls:<input type ="submit" name ="calc" id ="moduls" value="%"><br><br>

    </form>
</body>
</html>

<?php
$a = $_POST["a"];
$b = $_POST["b"];
$url="http://localhost/hardik_php/calulator_elif_post.php";
$choice=$_POST["calc"];

if ($choice=="+")
{
    $ans =$a+$b;
    echo("add:: $ans");
    echo("<button onclick=location.href='$url'>back to home</button>");

}

elseif ($choice=="-")
{
    $ans =$a-$b;
    echo("subt:: $ans");
    echo("<button onclick=location.href='$url'>back to home</button>");

}
elseif ($choice=="*")
{
    $ans =$a*$b;
    echo("mul:: $ans");
    echo("<button onclick=location.href='$url'>back to home</button>");

}
elseif ($choice=="/")
{
    $ans =$a/$b;
    echo("divi:: $ans");
    echo("<button onclick=location.href='$url'>back to home</button>");

}
elseif ($choice=="%")
{
    $ans =$a%$b;
    echo("moduls:: $ans");
    echo("<button onclick=location.href='$url'>back to home</button>");

}
else
{

    echo("please select appropriate choice:");
    echo("<button onclick=location.href='$url'>back to home</button>");

}


?>
