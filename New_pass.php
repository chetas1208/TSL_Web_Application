<?PHP
$h = "localhost";
$u = "root";
$p = "";
$d = "de_project";
$conn = mysqli_connect($h, $u, $p, $d);

$pass1 = $_POST['p3'];
$pass2 = $_POST['p4'];

if ($pass1 == $pass2) {
    //$ctab = "CREATE TABLE New_pass_1 (pass2 int(6) primary key, pass1 int(6) not null)";
    //mysqli_query($conn, $ctab);

    $cin = "INSERT INTO New_pass_1 (pass1, pass2) values('" . $pass1 . "','" . $pass2 . "');";

    if (mysqli_query($conn, $cin)) {
        echo "<h1>Your Password has been reset.<h1>";
        echo "<br>";
        echo "
        <h3><b>Click this button to Login Again.</b></h3>
        <br>
        <button type='button' style='background-color: red;
        color: #fff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        width: 100px;'>
              <a href='homePage.html'>Continue</a>
              </button>";
    } else {
        echo "Error occured";
        echo "<br>";
    }
}
?>