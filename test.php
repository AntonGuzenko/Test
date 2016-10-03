<?PHP 
echo "enter number\n";
 $handle = fopen ("php://stdin","r");
$num=  fgets($handle); 
if ($num%1==0 && !($num>1)){
	echo"sej4as $num.chas";
	# code...
}
