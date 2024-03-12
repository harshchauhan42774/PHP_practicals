<?php
$a = array(
	 array(1,2,3),
	 array(4,5,6),
	 array(7,8,9)
);

$b = array(
	 array(1,2,3),
	 array(4,5,6),
	 array(7,8,9)
);
echo "frist metrix <br>";
for ($i=0; $i<3 ; $i++) {
	for ($j=0; $j < 3; $j++) {
		echo $a[$i][$j];
		echo " ";
	}
	echo "<br> <br>";
}
echo "second matrix <br>";
for ($i=0; $i<3 ; $i++) {
	for ($j=0; $j < 3; $j++) {
		echo $b[$i][$j];
		echo " ";
	}
	echo "<br> <br>";


}
$mul = array();
for ($i=0; $i<3 ; $i++) {
	for ($j=0; $j < 3; $j++) {
		$mul[$i][$j]=0;
		for ($k=0; $k < 3 ; $k++) {
			$mul[$i][$j] +=$a[$i][$k] * $b[$k][$j];
		}
			}
	echo "<br>";


}
echo "multi two matrix <br>";
for ($i=0; $i<3 ; $i++) {
	for ($j=0; $j < 3; $j++) {
		echo $mul[$i][$j];
		echo " ";
	}
	echo "<br> <br>";

}
?>
