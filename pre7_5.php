<html>
<head>
</head>
<body>
  <form  method="POST">
    enter length:<input type="number" name="length"><br><br>
    enter color:<input type="text" name="color"><br><br>
    <input type="submit" name="submit" ><br>



  </form>
</body>
</html>

<?php

interface shape
{
    function getshape();
}
/**
 *
 */
interface color
{
  function getcolor();
}
class square implements shape,color
{
  public $length;
  public $color;

  function __construct($length,$color)
  {
    $this->length=$length;
    $this->color=$color;
  }
  function getshape()
  {
    $ans=$this->length*$this->length;
    echo"square::$ans<br>";
  }
  function getcolor()
  {
    echo "color:$this->color";
  }
}
$a=isset($_POST["length"]) ? $_POST["length"] : 0;
$b=isset($_POST["color"]) ? $_POST["color"] : " ";
$s1=new square($a,$b);
$s1->getshape();
$s1->getcolor();
?>
