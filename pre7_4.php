
<!DOCTYPE html>
<html>
  <body>
    <form method="POST">
      name:<input type="text" name="name"><br><br>
      enroll:<input type="number" name="eno"><br><br>
      num:<input type="number" name="num"><br><br>
      cn:<input type="number" name="cn"><br><br>
      php:<input type="number" name="php"><br><br>
      ise:<input type="number" name="ise"><br><br>
      aoop:<input type="number" name="aoop"><br><br>
      submit:<input type="submit" name="submit" value="submit"><br><br>

    </form>

  </body>
</html>
<?php

class student
{
  public $name;
  public $eno;
  public $m_no;

  function   readdata($name,$eno,$m_no)
  {
    $this->name = $name;
    $this->eno = $eno;
    $this->m_no = $m_no;
  }
  function putdata()
  {
    echo "student name is::$this->name<br>";
    echo "student name is::$this->eno<br>";
    echo "student name is::$this->m_no<br>";
  }
}
class sem4 extends student
{
  public $cn;
  public $php;
  public $ise;
  public $aoop;

  function getdata($cn,$php,$ise,$aoop)
  {
    $this->cn=$cn;
    $this->php=$php;
    $this->ise=$ise;
    $this->aoop=$aoop;
  }
  function display()
  {
    echo "cn mark is::$this->cn<br>";
    echo "php mark is::$this->php<br>";
    echo "ise mark is::$this->ise<br>";
    echo "aoop mark is::$this->aoop<br>";
    echo "ans is::$this->ans<br>";
    echo "total mark is::$this->k<br>";
  }
  function precent($cn,$php,$ise,$aoop)
  {
    $ans=0;
    $k=0;
    $this->ans=$this->cn+$this->php+$this->ise+$this->aoop;
    $this->k=($this->ans*100)/400;
  }
}
$a=isset($_POST["name"]) ? $_POST["name"] :0;
$b=isset($_POST["eno"]) ? $_POST["eno"] :0;
$c=isset($_POST["num"]) ? $_POST["num"] :0;
$d=isset($_POST["cn"]) ? $_POST["cn"] :0;
$e=isset($_POST["php"]) ? $_POST["php"] :0;
$f=isset($_POST["ise"]) ? $_POST["ise"] :0;
$g=isset($_POST["aoop"]) ? $_POST["aoop"] :0;
$p1=new sem4();
$p1->readdata($a,$b,$c);
$p1->getdata($d,$e,$f,$g);
$p1->precent($d,$e,$f,$g);
$p1->putdata();
$p1->display();
?>
