<?php
$aoos=isset($_POST["aoos"])?$_POST["aoos"]:0;
$cn=isset($_POST["cn"])?$_POST["cn"]:0;
$php=isset($_POST["php"])?$_POST["php"]:0;
$se=isset($_POST["se"])?$_POST["se"]:0;
echo "
<form  method=\"post\">
<table >
<tr>
<th>subject </th>
<th>&nbsp :: &nbsp</th>
<th>marks</th>
</tr>
<tr>
<td >advanced object oriented system</td>
<td style=\"text-align: center;\">&nbsp :: &nbsp</td>
<td><input type=\"number \" name=\"aoos\"></td>
</tr>
<tr>
<td>computer network </td>
<td style=\"text-align: center;\">&nbsp :: &nbsp</td>
<td><input type=\"number \" name=\"cn\"></td>
</tr>
<tr>
<td>introduction to php</td>
<td style=\"text-align: center;\">&nbsp :: &nbsp</td>
<td><input type=\"number \" name=\"php\"></td>
</tr>
<tr>
<td>software engineering </td>
<td style=\"text-align: center;\">&nbsp :: &nbsp</td>
<td><input type=\"number \" name=\"se\"></td>
</tr>
<tr>
<td></td>
<td><button type=\"submit\" name=\"btn\">SUBMIT</button></td>
<td></td>
<tr>
</table>
</form>
";

echo "
<form  method=\"post\">
<table>
<tr>
<th>subject </th>
<th>&nbsp :: &nbsp</th>
<th>marks</th>
</tr>
<tr>
<td>advanced object oriented system</td>
<td style=\"text-align: center;\">&nbsp :: &nbsp</td>
<td>$aoos</td>
</tr>
<tr>
<td>computer network </td>
<td style=\"text-align: center;\">&nbsp :: &nbsp</td>
<td>$cn</td>
</tr>
<tr>
<td>introduction to php</td>
<td style=\"text-align: center;\">&nbsp :: &nbsp</td>
<td>$php</td>
</tr>
<tr>
<td>software engineering </td>
<td style=\"text-align: center;\">&nbsp :: &nbsp</td>
<td>$se</td>
</tr>
</table>
</form>
";

// echo "advanced object oriented system ::$aoos<br> ";
// echo "computer network ::$cn<br>";
// echo "introduction to php ::$php<br> ";
// echo "software engineering ::$se<br> ";
$sum=$aoos+$cn+$php+$se;
$pr=$sum/4;
echo "
<form  method=\"post\">
<table>
<tr>
<th>subject </th>
<th>&nbsp :: &nbsp</th>
<th>marks</th>
</tr>
<tr>
<td>sum total is</td>
<td style=\"text-align: center;\">&nbsp :: &nbsp</td>
<td>$sum</td>
</tr>
<tr>
<td>percentage</td>
<td style=\"text-align: center;\">&nbsp :: &nbsp</td>
<td>$pr</td>
</tr>
</table>
</form>
";

if($pr>=90 && $pr<=100){
  echo "grade is A: ";

}
elseif ($pr>=80 && $pr<90) {
  echo "grade is B:";

}
elseif ($pr>=70 && $pr<80) {
  echo "grade is C:";
}
elseif ($pr>=60 && $pr<70) {
  echo "grade is D:";
}
elseif ($pr>=45 && $pr<60) {
  echo "grade is E: ";
}
else {
  if($pr>100){
    echo "invalid input";
  }
  else{
    echo "grade is ff:";
  }
}
 ?>
