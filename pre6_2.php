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
<td>enter the string::</td>
<td>&nbsp :: &nbsp</td>
<td><center><input type=\"text\" name=\"name\"></td>
</tr>

<tr>
<td>enter the string on remove white space::</td>
<td>&nbsp :: &nbsp</td>
<td><center><input type=\"text\" name=\"name1\"></td>
</tr>

<tr>
<td>enter the string on to be replace::</td>
<td>&nbsp :: &nbsp</td>
<td><center><input type=\"text\" name=\"name2\"></td>
</tr>

<tr>
<td>enter the string on you wnat to replace::</td>
<td>&nbsp :: &nbsp</td>
<td><center><input type=\"text\" name=\"name3\"></td>
</tr>

<tr>

<td colspan = \"4\"><center><button type=\"submit\" name=\"submit\" >submit</button></td>
</tr>

</table>


</form>
";
$islow=" ";
$rev=" ";
$space=" ";
$replce=" ";
$str=isset($_POST['name']) ? $_POST['name'] : 0;
$str1=isset($_POST['name1']) ? $_POST['name1'] : 0;
$str2=isset($_POST['name2']) ? $_POST['name2'] : 0;
$str3=isset($_POST['name3']) ? $_POST['name3'] : 0;

$submit=isset($_POST['submit']) ?  $_POST['submit']: 0;
if ($submit!=0) {
$islow=ctype_lower($str) ? "yes" : "no";
$rev=strrev($str);
$space=trim($str,$str1);
$replce=str_replace($str2,$str3,$str);
}


echo "
<table style=\"border:4px ; border-style:SOLID;color:#f9f9f9; border-color:rosyBrown; background-color:black; font-size:20px\" width=70%>
<tr>
<td>string operation</td>
<td>&nbsp :: &nbsp</td>
<td>string value</td>
</tr>

<tr>
<td>string is lowercase </td>
<td>&nbsp :: &nbsp</td>
<td>$islow</td>
</tr>

<tr>
<td>string is reverse </td>
<td>&nbsp :: &nbsp</td>
<td>$rev</td>
</tr>

<tr>
<td>string in white space remove</td>
<td>&nbsp :: &nbsp</td>
<td>$space</td>
</tr>

<tr>
<td>replace the given string</td>
<td>&nbsp :: &nbsp</td>
<td>$replce</td>
</tr>

</table>
";
 ?>
