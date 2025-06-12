<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | PG-Life</title>
    <?php
        include "includes/header_links.php";
    ?>
    <link rel="stylesheet" href="css/home.css" type="text/css" />
    
</head>
<body>
    
    <?php 
        include "includes/header.php";
           
    ?>
    <div class="banner-container">
        <h2 class="white-pb3">Happiness Per Square Foot</h2>

        <form id="search-form" method="GET" action="property_list.php">
            <div class="input-group city-search">
                <input type="text" id="city" name='city' class="form-control input-city" placeholder="Enter your city to search for PGs">
                
                <button class="btn btn-search bg-dark text-light" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="page-container">
        <h1 class="city-heading">Major cities</h1>

        <div class="row">
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Delhi">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" alt="Delhi" class="city-card-img">
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" alt="Mumbai" class="city-card-img">
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Hyderabad">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" alt="Hyderabad" class="city-card-img">
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Bangalore">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" alt="Bangalore" class="city-card-img">
                    </div>
                </a>
            </div>
        </div>
    </div>

    
    <?php include "includes/signup_modal.php";?>
    <?php include "includes/login_modal.php" ;?>
    <?php
        include "includes/footer.php";
    ?>
</body>
</html>