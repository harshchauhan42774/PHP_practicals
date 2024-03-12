<!DOCTYPE html>
<html>
  <body>
    <form method="POST">
      name:<input type="text" name="name"><br><br>
      author:<input type="text" name="author"><br><br>
      price:<input type="number" name="price"><br><br>
      submit:<input type="submit" name="submit" value="submit"><br><br>
    </form>

  </body>
</html>
<?php
class book
{
  public $name;
  public $author;
  public $price;
  function __construct($name,$author,$price)
  {
    $this->name=$name;
    $this->author=$author;
    $this->price=$price;
  }
  function __destruct()
  {
    echo"destructor is started";
  }
  function putdata()
  {
    echo"book name is ::$this->name<br>";
    echo"book author name is::$this->author<br>";
    echo"book price is::$this->price<br>";
  }
}
$a=isset($_POST["name"]) ? $_POST["name"] :0;
$b=isset($_POST["author"]) ? $_POST["author"] :0;
$c=isset($_POST["price"]) ? $_POST["price"] :0;
$p1=new book($a,$b,$c);
$p1->putdata();

?>
