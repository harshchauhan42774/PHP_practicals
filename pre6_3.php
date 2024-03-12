<?php
echo "
<form method=\"post\">
<table style=\"border:4px ; border-style:SOLID;color:#f9f9f9; border-color:rosyBrown; background-color:black; font-size:20px\" width=70%>
<tr>
<th>subject</th>
<td>&nbsp  &nbsp</td>
<th>input</th><center>
</tr>


<tr>
<td>enter the initial number::</td>
<td>&nbsp :: &nbsp</td>
<td><center><input type=\"number\" name=\"name\"></td>
</tr>

<tr>
<td>enter the last number of range::</td>
<td>&nbsp :: &nbsp</td>
<td><center><input type=\"number\" name=\"name1\"></td>
</tr>

<tr>
<td>enter the decimal number::</td>
<td>&nbsp :: &nbsp</td>
<td><center><input type=\"number\" name=\"name2\"></td>
</tr>

<tr>
<td>enter the ang value::</td>
<td>&nbsp :: &nbsp</td>
<td><center><input type=\"number\" name=\"name3\"></td>
</tr>

<tr>

<td colspan = \"4\"><center><button type=\"submit\" name=\"submit\" >submit</button></td>
</tr>

</table>


</form>
";
$rnd=0;
$binary=0;
$octal=0;
$sin=0;
$cos=0;
$tan=0;
$hexadecimal=0;

$str=isset($_POST['name']) ? $_POST['name'] : 0;
$str1=isset($_POST['name1']) ? $_POST['name1'] : 0;
$str2=isset($_POST['name2']) ? $_POST['name2'] : 0;
$str3=isset($_POST['name3']) ? $_POST['name3'] : 0;

$submit=isset($_POST['submit']) ?  $_POST['submit']: 0;
if ($submit!=0) {
$rnd=rand($str,$str1);
$binary=decbin($str2);
$octal=decoct($str2);
$hexadecimal=dechex($str2);
$sin=sin($str3*(3.14/180));
$cos=cos($str3*(3.14/180));
$tan=tan($str3*(3.14/180));
}


echo "
<table style=\"border:4px ; border-style:SOLID;color:#f9f9f9; border-color:rosyBrown; background-color:black; font-size:20px\" width=70%>
<tr>
<td>string operation</td>
<td>&nbsp :: &nbsp</td>
<td>string value</td>
</tr>

<tr>
<td>Genereted random number is:: </td>
<td>&nbsp :: &nbsp</td>
<td>$rnd</td>
</tr>

<tr>
<td>decimal to binary</td>
<td>&nbsp :: &nbsp</td>
<td>$binary</td>
</tr>

<tr>
<td>decimal to octal</td>
<td>&nbsp :: &nbsp</td>
<td>$octal</td>
</tr>

<tr>
<td>decimal to hexadecimal</td>
<td>&nbsp :: &nbsp</td>
<td>$hexadecimal</td>
</tr>

<tr>
<td>value of sin</td>
<td>&nbsp :: &nbsp</td>
<td>$sin</td>
</tr>

<tr>
<td>value of cos</td>
<td>&nbsp :: &nbsp</td>
<td>$cos</td>
</tr>

<tr>
<td>value of tan</td>
<td>&nbsp :: &nbsp</td>
<td>$tan</td>
</tr>

</table>
";
 ?>
