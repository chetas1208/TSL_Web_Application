<?php
if (isset($_POST["p1"])) {
  header("Location: kutchPay.php");
} else if (isset($_POST["p2"])) {
  header("Location: mumbaiPay.php");
} else if (isset($_POST["p3"])) {
  header("Location: bhavnagarPay.php");
}
?>