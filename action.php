<?php require 'header.php' ?>

<?php 

$amount = $_POST['amount'];
$result = $amount * 0.03;

if(isset($amount)) {
    echo "This is equal " . $result . " EUR";
  }
?>
<br>
<a href="index.php" class="w-30 bg-teal-600 mx-3 mt-3 rounded">Back</a>
