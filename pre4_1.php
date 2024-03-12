<html>
<head>
</head>

<body>
  <form  method="post">
    enter car name:<input type="text" name="car"><br><br>
    submit:<input type="submit" name="submit" value="submit"><br>

  </form>
</body>
</html>
<?php
$car=isset($_POST["car"]) ? $_POST["car"]:0;
$ans="invalid";
if($car=="safari" || $car=="nexon" || $car=="tigor" || $car=="tiago")
{
  $ans="TATA";
}
elseif ($car=="xuv700" || $car=="xuv300" || $car=="bolero" )
{
  $ans="MAHINDRA";
}
elseif($car=="i20" || $car=="verna" || $car=="venue" || $car=="creta")
{
  $ans="Hyndai";
}
else
{
    echo"invalid model name";
}
echo "
<table >
<tr>
<th>CAR </th>
<th>&nbsp :: &nbsp</th>
<th>COMPANY</th>
</tr>
<tr>
<td>$car</td>
<th>&nbsp :: &nbsp</th>
<td>$ans</td>
</tr>
</table>
";


 ?>
