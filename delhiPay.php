<?php
$travelling = 2000;
$stay = 1000 * 2;
$local = 1500;
$total = $travelling + $stay + $local;

echo "
<!DOCTYPE html>
<html>
<head>
<title>Payment details</title>
</head>
<body>
<h1>Ahmedabad-Delhi(3 days-2 nights)</h1>
<h2><b>Payment Details</b></h2>
";
echo "<br>";
echo "
Travelling: " . $travelling;
echo "<br>";
echo "<br>";
echo "
Stay: " . $stay;
echo "<br>";
echo "<br>";
echo "
Local: " . $local;
echo "<br>";
echo "*Local travelling cost is estimated and minimum.";
echo "<br>";
echo "<br>";
echo "
<hr>
Total: " . $total;
echo "<br>";
echo "<br>";
echo "
<form method='post' action='successful.php'>
<input type='hidden' id='h1' name='h1' value='" . $total . "'>
<button type='submit' style='background-color: red;
color: #fff;
padding: 10px 20px;
border: none;
cursor: pointer;
width: 100px;'>Pay</button>
</form>
</body>
</html>
";
?>