<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFFICIAL PAGE OF TEAM BETTER PERFORMANCE</title>
    <link rel="stylesheet" href="officialpage.css">
    <link rel="icon" type="image/x-icon" href="red bg team.jpg">
</head>
<body>
    <div class="navbar">
        <a href="login.html">Home</a>
        <a href="#">About</a>
        <a href="#">Skills</a>
        <a href="#">Projects</a>
        <a href="#">Contact</a>
        <a href="logout.php" id="logout">Logout</a>
    </div>
    <!-- <span class="text"></span> -->
    <h1>Welcome To The Official Page Of Team Better Performace</h1>
    <h2><?php echo "Welcome ". $_SESSION['username']?>! You Can Now Use This Website</h2>
    <div class="container">
        <div class="items" id="i1">
            <h2>Team Better Performance</h2>
            <p>We Welcome You To Our World Of Fitness</p>
        </div>
        <div class="items" id="i2">
            <img src="BP_logo-removebg-preview.png" alt="BP LOGO">
        </div>
        <div class="items" id="i3">3</div>
    </div>
    <div class="footer">
        <p>Official Team Better Performace Website &#169;</p>
    </div>
    <script src="app.js"></script>
</body>
</html>