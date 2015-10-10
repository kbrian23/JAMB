<?PHP
if($_POST)
{
$hoursWorked = $_POST["hoursWorked"];
$wages = $_POST["wagesRate"];
$pay = $_POST["pay"];
$payCheck = $_POST["payCheck"];
$x = $hoursWorked;
$y = $wages;
$z = $paycheck;
$z = ($x *$y) + (($x - 40) * $y * 1.5);
echo $z;
}


?>
