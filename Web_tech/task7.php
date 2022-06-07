<?php
$count=0;
for($i=1;$i<=3;$i++)
{
	$count=$i;
	while($count)
	{
		echo "* ";
		$count=$count-1;
	}
	echo "<br>";
}
for($i=1;$i<=3;$i++)
{
	$count=$i;
	while($count<=3)
	{
		echo $count;
		$count=$count+1;
	}
	echo "<br>";
}
?>