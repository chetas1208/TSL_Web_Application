<?PHP

$h = "localhost";
$u = "root";
$p = "";
$d="de_project";
$conn=mysqli_connect($h,$u,$p,$d);

$val=$_POST['h1'];

// $ctab = "CREATE TABLE Orderplace ( id int(3) primary key AUTO_INCREMENT, Payment int(5))";
// mysqli_query($conn,$ctab);

$cin = "INSERT INTO Orderplace (Payment) values('".$val."');";

if(mysqli_query($conn,$cin))
    {
        echo "<h1> Payment Sucessful </h1>";
    }
    else
    {
        echo "Error occured";
        echo "<br>";
    }

?>