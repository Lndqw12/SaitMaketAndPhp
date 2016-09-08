<meta charset ="UTF-8">
<?php
	$aq = "Получится - ";
		$a = 150;
		$b = 100;
	$sum = $a+$b;
 echo $aq, $sum;

 echo "</br>";

 $sergey = 33;
	if(isset($sergey));
 echo "переменная существует";

 echo "</br>";

 $varby = "test";
 if (isset($varby))
{
	echo "good";
	}
 else
{
	echo "bad";
	}

 echo "</br>";

$array = array ("food", "bar", "hello", "world");
var_export($array);

echo "</br>";
 
 $whatis =" Пример";
 unset($whatis );
 echo $whatis ;
 $whatis ="test";
 $random=43;
 $result=$whatis .$random;
 echo $result
//is_numeric ($whatis,$random);

$varone = "73";
$vartwo = "27";
$result = $varone+$vartwo;
echo $result;
 ?>