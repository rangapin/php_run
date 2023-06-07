<?php 

$amount = $_POST['amount'];
$result = $amount * 0.03;

if (isset($amount)) {
    echo "This is equal " . $result . " EUR";
  }