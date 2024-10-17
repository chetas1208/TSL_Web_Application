<?PHP
    $h = "localhost";
    $u = "root";
    $p = "";
    $d="de_project";
    $conn=mysqli_connect($h,$u,$p,$d);

    $name=$_POST['un2'];
    $pass=$_POST['p2'];

    // $ctab = "CREATE TABLE Register_1 ( id int(3) primary key AUTO_INCREMENT, User_name varchar(35), password int(6) not null)";
    // mysqli_query($conn,$ctab);

    $cin = "INSERT INTO Register_1 (User_name, password) values('".$name."','".$pass."');";

    if(mysqli_query($conn,$cin))
    {
        header('Location: Packages.php');
        echo"<input type='hidden' id='h1' name='h1' value='" . $name . "'>";
    }
    else
    {
        echo "Error occured";
        echo "<br>";
    }
?>