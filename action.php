<?php require 'header.php';

$amount = $_POST['amount'];
$result = $amount * 0.03;

if(isset($amount)) {
    echo '<div class="flex flex-wrap h-72 w-100 bg-gray-100 justify-around items-center"</div>';
    echo "This is equal " . $result . " EUR";
    echo "</div>";
  }
?>
<br>
<a href="index.php" class="w-40 h-20 bg-slate-600 mx-5 mt-5 my-5 p-1 rounded">Back</a>
