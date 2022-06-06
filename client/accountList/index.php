<?php
    session_start();
    //if the user is logged in and haven't been to bank
        //go to bank with request for relevant details
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <header class="titleBlock">
        <H1 class="title">OmniCorp's Bank Division</H1>
        <h4 class="titleQuote">All your life savings are with us</h4>
    </header>
    <div  class="accountBar">
        <div class="contentBox">
            <a class="navLink">Account info</a>
        </div>
        <div class="contentBox">
            <a class="navLink">Login</a>
        </div>
        <div class="contentBox">
            <a class="logout" href="">Logout</a>
        </div>
    </div>
    <div class="contentContainer">
        <nav  class="navBlock contentBox">
            <a href="#" class="navLink">Accounts</a>
            <a href="../createAccount" class="navLink">Open a new account</a>
            <a href="../addFunds" class="navLink">Add funds</a>
            <a href="../withdrawFunds" class="navLink">Withdraw funds</a>
        </nav>
        <main  class="mainContetBlock contentBox">
            Currently, there are no accounts...
        </main>
    </div>

</body>
</html>