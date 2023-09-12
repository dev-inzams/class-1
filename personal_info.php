<?php
    $profilePhoto = "inzams.jpg";

    $name = "Developer InZamS";
    $email = "inzams.hp@gmail.com";
    $age = 25;
    $Phone = "+123456789";
    $address = "Kedur Mor, Rajshahi";
    $country = "Bangladesh";
    
    $aboutMe = "Hi there, I am Inzams, and I am an experienced WordPress Web Font end Developer, with 2+ years of experience. My first goal is to satisfy the client 100%. I will work according to all your requirements. I am expert on WordPress all category's website. Like E-commerce, LMS, Blog, Portfolio, Newspaper and all website I can build on your requirement.With all websites I offer speed optimization, website security etc, which makes your user experience better. I use Elementor, Elementor Pro, Divi, WP Bekary, TagDiv, Gutenberg as a page builder to develop your WordPress websites.
        Profiles";
        
    $education = "Now a student of ostad's PHP Laravel 2nd batch";
    
    







?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Personal Information</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="<?php echo $profilePhoto; ?>" alt="Profile Picture" class="img-fluid">
        </div>
        <div class="col-md-8">
            <h1><?php echo $name; ?></h1>
            <p>Email: <?php echo $email; ?></p>
            <p>Age: <?php echo $age; ?></p>
            <p>Phone: <?php echo $Phone; ?></p>
            <p>Address: <?php echo $address; ?> <b><?php echo $country; ?></b></p>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <h2>About Me</h2>
            <p><?php echo $aboutMe; ?></p>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <h2>Education</h2>
            <p><?php echo $education ?></p>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
