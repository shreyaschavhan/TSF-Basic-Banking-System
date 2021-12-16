<?php
    require('config.php');

    $from = $_POST['from'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $queryFrom = "select * from customers where email = '$from'";
    $queryTo = "select * from customers where email = '$to'";
    $resultFrom = mysqli_query($connect, $queryFrom);
    $resultTo = mysqli_query($connect, $queryTo);
    $rowFrom = mysqli_fetch_assoc($resultFrom);
    $rowTo = mysqli_fetch_assoc($resultTo);

    $balanceFrom = $rowFrom['balance'];
    $balanceTo = $rowTo['balance'];

    $updateFrom = $balanceFrom - $amount;
    $updateTo = $balanceTo + $amount;

    $updatefromQuery = "update customers set balance = '$updateFrom' where email = '$from'";
    $updatetoQuery = "update customers set balance = '$updateTo' where email = '$to'";
    mysqli_query($connect, $updatefromQuery);
    mysqli_query($connect, $updatetoQuery);

    $queryInsert = "insert into transfer(fromMail, toMail, amount) values('$from', '$to', '$amount')";

    mysqli_query($connect, $queryInsert);

    header("location:transfer.php?ok=1");
    
?>