<?php
    require('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All</title>
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
                <div class="nav__sublogo">All Customers</div>
            </a>
        </nav>
    </header>
    <div class="customer-table">
        <div class="customer-grid">
            <?php
                $query = "SELECT * FROM customers";
                $result = mysqli_query($connect, $query);
                while($row = mysqli_fetch_array($result)){
                    $name = $row['name'];
                    $image = $row['image'];
                    $dob = $row['dob'];
                    $account = $row['account'];
                    $email = $row['email'];
                    $balance = $row['balance'];
                    echo 
                    "
                        <div class='customer'>            
                            <img src='$image' alt='$name'>
                            <h1 class='customer-name'>$name</h1>
                            <span class='button button--flex button--small button--link services__button'>View Details
                                <i class='uil uil-arrow-right button__icon'></i>
                            </span>
                            <div class='services__modal'>
                                <div class='services__modal-content'>
                                <h4 class='services__modal-title'>
                                    $name
                                </h4>
                                <i class='uil uil-times services__modal-close'></i>
                                <ul class='service__modal-services grid'>
                                    <li class='services__modal-service'>
                                        <i class='uil uil-check-circle services__modal-icon'></i>
                                        <p> Account Number: $account</p>
                                    </li>
                                    <li class='services__modal-service'>
                                        <i class='uil uil-check-circle services__modal-icon'></i>
                                        <p> Account Balance: $balance</p>
                                    </li>
                                    <li class='services__modal-service'>
                                        <i class='uil uil-check-circle services__modal-icon'></i>
                                        <p> Date of Birth: $dob</p>
                                    </li>
                                    <li class='services__modal-service'>
                                        <i class='uil uil-check-circle services__modal-icon'></i>
                                        <p> Email ID: $email</p>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    ";
                }
            ?>
            <!-- <div class="customer">
                <img src="assets/images/1.jpg" alt="">
                <h1 class="customer-name">Name Surname</h1>
                <span class="button button--flex button--small button--link services__button">View Details
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>
                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">
                            Name Surname
                        </h4>
                        <i class="uil uil-times services__modal-close"></i>
                        <ul class="service__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p> Account Number: 90909090</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Email Id: namesurname@gmail.com</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Account Balance: 2000Rs</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Date of Birth: 19/10/2001</p>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
            <div class="customer">
                <img src="assets/images/2.jpg" alt="">
                <h1 class="customer-name">Name Surname</h1>
                <span class="button button--flex button--small button--link services__button">View details
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>
            </div>
            <div class="customer">
                <img src="assets/images/3.jpg" alt="">
                <h1 class="customer-name">Name Surname</h1>
                <span class="button button--flex button--small button--link services__button">View Details
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>
            </div>
            <div class="customer">
                <img src="assets/images/4.jpg" alt="">
                <h1 class="customer-name">Name Surname</h1>
                <span class="button button--flex button--small button--link services__button">View Details
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>
            </div>
            <div class="customer">
                <img src="assets/images/5.jpg" alt="">
                <h1 class="customer-name">Name Surname</h1>
                <span class="button button--flex button--small button--link services__button">View Details
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>
            </div>
            <div class="customer">
                <img src="assets/images/6.jpg" alt="">
                <h1 class="customer-name">Name Surname</h1>
                <span class="button button--flex button--small button--link services__button">View Details
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>
            </div>
            <div class="customer">
                <img src="assets/images/7.jpg" alt="">
                <h1 class="customer-name">Name Surname</h1>
                <span class="button button--flex button--small button--link services__button">View Details
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>
            </div>
            <div class="customer">
                <img src="assets/images/8.jpg" alt="">
                <h1 class="customer-name">Name Surname</h1>
                <span class="button button--flex button--small button--link services__button">View Details
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>
            </div>
            <div class="customer">
                <img src="assets/images/9.jpg" alt="">
                <h1 class="customer-name">Name Surname</h1>
                <span class="button button--flex button--small button--link services__button">View Details
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>
            </div>
            <div class="customer">
                <img src="assets/images/10.jpg" alt="">
                <h1 class="customer-name">Name Surname</h1>
                <span class="button button--flex button--small button--link services__button">View Details
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>
            </div> -->
        </div>
    </div>
</body>
<script src="assets/js/main.js"></script>

</html>