<?php
if ($_POST['to'] == 'Chennai') {
  header('Location: chennaiPay.php');
} else if ($_POST['to'] == 'Delhi') {
  header('Location: delhiPay.php');
} else if ($_POST['to'] == 'Kolkata') {
  header('Location: kolkataPay.php');
} else {
  echo 'Invalid city selected.';
}
?>