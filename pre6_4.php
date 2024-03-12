<?php
date_default_timezone_set("Asia/Kolkata");
$date1= date("d/m/Y");
$date2= date("m/d/Y");
$date3= date("Y/m/d");
$time1=date("h:i:sa");
$time2=date("H:i:s");
$time3=date("h:ia");
echo "
<table style=\"border:4px ; border-style:SOLID;color:#f9f9f9; border-color:rosyBrown; background-color:black; font-size:20px\" width=70%>
<tr>
<td>date using formate d-m-y</td>
<td>&nbsp :: &nbsp</td>
<td>$date1</td>
</tr>

<tr>
<td>date using formate m-d-y </td>
<td>&nbsp :: &nbsp</td>
<td>$date2</td>
</tr>

<tr>
<td>date using formate y-m-d</td>
<td>&nbsp :: &nbsp</td>
<td>$date3</td>
</tr>

<tr>
<td>time using 12 hour formate</td>
<td>&nbsp :: &nbsp</td>
<td>$time1</td>
</tr>

<tr>
<td>time using 24 hour formate</td>
<td>&nbsp :: &nbsp</td>
<td>$time2</td>
</tr>

<tr>
<td>time using am m formate</td>
<td>&nbsp :: &nbsp</td>
<td>$time3</td>
</tr>

</table>
";
 ?>
