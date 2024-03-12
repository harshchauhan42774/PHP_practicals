<?php
echo "
<form method=\"POST\">
enter your string::<input type=\"text\" name=\"string\"></input><br>
<button type=\"submit\" name=\"submit\">submit</button>
</form>
";
$str=isset($_POST["string"]) ? $_POST["string"] : 0;
$cnt=0;
$word=0;
while (isset($str[$cnt])!=NULL)
{
  if($str[$cnt]==" ")
  {
    $word++;
  }
  $cnt++;
}
echo("string is:: $str<br>");
echo("length of string is count:: $cnt<br>");
echo("total words are::".$word+1);
 ?>
