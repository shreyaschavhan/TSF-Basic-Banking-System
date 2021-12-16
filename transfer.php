<?php
    require('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="circle-right-1"></div>
    <div class="circle-right-2"></div>
    <div class="circle-left-1"></div>
    <header>
        <nav>
            <a href="">
                <div class="nav__logo">Task #1: Basic Banking System</div>
                <div class="nav__sublogo">Transfer Money</div>
            </a>
        </nav>
    </header>
    <div class="transfer">
        <div>
            <?php
            if(isset($_GET['ok']))
			{
				echo '<font color="blue">Money Successfully Transferred!</font>';
				echo '<br><br>';
			}
            ?>
        <form action="transfer_process.php" method="post">
            <label for="from">From</label>
            <input type="email" id="from" name="from">
            <br>
            <label for="to">To</label>
            <input type="email" id="to" name="to">
            <br>
            <label for="amount">Amount</label>
            <input type="number" id="amount" name="amount">
            <br>
            <input type="submit" value="Send" class="button">
        </form>
        </div>
    </div>
    
</body>
<script src="assets/js/main.js"></script>

</html>