<?php
$a=($_POST['a']) ? $_POST['a']:0;
for ($i=1;$i<=$a
;$i++)
{
  for($j=1;$j<=10;$j++)
  {
    $ans=$i*$j;
    echo "$i * $j = $ans"."<br>";
  }
}
 ?>
 <html>
 <head>
 </head>
 <body>
   <form method="post">
     enter number:<input type="number" name="a" value="a"><br>
     add:<input type="submit" name="add" value="add"><br>



   </form>
 </body>
 </html>
