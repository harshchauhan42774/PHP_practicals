<?php
$sort = array(11,99,22,88,33,77,44,66,55);
for ($i=0; $i<9; $i++)
{
  for ($j=0; $j<9; $j++)
  {
    if($sort[$i]<$sort[$j])
    {
      $temp=$sort[$i];
      $sort[$i]=$sort[$j];
      $sort[$j]=$temp;
    }
  }
}
for($i=0;$i<9;$i++)
{
  echo " ".$sort[$i]." ";
}
 ?>
