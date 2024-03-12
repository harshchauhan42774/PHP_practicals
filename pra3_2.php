<!DOCTYPE html>
<html>
  <head>
        <title></title>
  </head>
  <body>
    <form  method="post" >
      <b style="color:#2F4F4F; font-size:25px;">Enter basic salary:<input type="number" name="bs" value="0" style="background-color:#2F4F4F; color:rosyBrown; font-size:25px; font-family: Times New Roman"><br>
      <button style="background:rosyBrown; width:10%;" type="submit" name="button" >SUBMIT</button><br>


    </form>
  </body>
</html>

<?php
$basic_pay=isset($_POST['bs']) ? $_POST['bs']:0;
$da=($basic_pay * 50) /100;
$hra=($basic_pay * 10) /100;
$medical=($basic_pay * 4) /100;
$is=($basic_pay * 7) /100;
$pf=($basic_pay * 5) /100;
echo"<table style=\"border:4px ; border-style:SOLID;color:#f9f9f9; border-color:rosyBrown; background-color:lightsteelblue; font-size:20px;\" width=50%>
      <tr>
         <td style=\"border:1px ; color:rosyBrown; background-color:#2F4F4F; \">dearness_allowance</td>
         <td style=\"border:1px ; color:rosyBrown; background-color:#2F4F4F; \">&nbsp :: &nbsp</td>
         <td style=\"border:1px ; color:rosyBrown; background-color:#2F4F4F; \">$da</td>
      </tr><br>
      <tr>
         <td style=\"border:1px ; color:#2F4F4F; background-color:rosyBrown; \">house rate allownace</td>
         <td style=\"border:1px ; color:#2F4F4F; background-color:rosyBrown; \">&nbsp :: &nbsp</td>
         <td style=\"border:1px ; color:#2F4F4F; background-color:rosyBrown; \">$hra</td>
      </tr><br>
      <tr>
         <td style=\"border:1px ; color:rosyBrown; background-color:#2F4F4F; \">medical</td>
         <td style=\"border:1px ; color:rosyBrown; background-color:#2F4F4F; \">&nbsp :: &nbsp</td>
         <td style=\"border:1px ; color:rosyBrown; background-color:#2F4F4F; \">$medical</td>
      </tr>
      <tr>
         <td style=\"border:1px ;  color:#2F4F4F; background-color:rosyBrown; \">insurance</td>
         <td style=\"border:1px ;  color:#2F4F4F; background-color:rosyBrown; \">&nbsp :: &nbsp</td>
         <td style=\"border:1px ;  color:#2F4F4F; background-color:rosyBrown; \">$is</td>
      </tr>
      <tr>
         <td style=\"border:1px ; color:rosyBrown; background-color:#2F4F4F; \">provident fund</td>
         <td style=\"border:1px ; color:rosyBrown; background-color:#2F4F4F; \">&nbsp :: &nbsp</td>
         <td style=\"border:1px ; color:rosyBrown; background-color:#2F4F4F; \">$pf</td>
      </tr>
</table><br><br>";
$gs=$basic_pay+$da+$hra+$medical;
$dd=$is+$pf;
$ns=$gs-$dd;
echo"<table style=\"border:4px ; border-style:SOLID;color:#f9f9f9; border-color:rosyBrown; background-color:white; font-size:20px\" width=70%>
<tr>
   <td style=\"border:1px ; color:rosyBrown; background-color:#2F4F4F; \">GROSS SALARY</td>
   <td style=\"border:1px ; color:rosyBrown; background-color:#2F4F4F; \">&nbsp :: &nbsp</td>
   <td style=\"border:1px ; color:rosyBrown; background-color:#2F4F4F; \">$gs</td>
</tr>
<tr>
  <td style=\"border:1px ;  color:#2F4F4F; background-color:rosyBrown; \">DEDUCATION SALARY</td>
  <td style=\"border:1px ;  color:#2F4F4F; background-color:rosyBrown; \">&nbsp :: &nbsp</td>
  <td style=\"border:1px ;  color:#2F4F4F; background-color:rosyBrown; \">$dd</td>

</tr>
<tr>
   <td style=\"border:1px ; color:rosyBrown; background-color:#2F4F4F; \">NET SALARY</td>
   <td style=\"border:1px ; color:rosyBrown; background-color:#2F4F4F; \">&nbsp :: &nbsp</td>
   <td style=\"border:1px ; color:rosyBrown; background-color:#2F4F4F; \">$ns</td>
</tr>
</table>";
?>
