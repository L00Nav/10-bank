<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join us</title>
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
            <a href="../accountList" class="navLink">Accounts</a>
            <a href="#" class="navLink">Open a new account</a>
            <a href="../addFunds" class="navLink">Add funds</a>
            <a href="../withdrawFunds" class="navLink">Withdraw funds</a>
        </nav>
        <main  class="mainContetBlock contentBox">
            <form class="mainContent" action="../../server/bank/index.php" method="post">
                <label for="fname">First name:</label><br>
                <input type="text" name="fname"><br><br>
                <label for="lname">Last name:</label><br>
                <input type="text" name="lname"><br><br>
                <label for="pnumber">Personal ID number:</label><br>
                <input type="text" name="pnumber"><br><br>
                <label for="anumber">Account number:</label><br>
                <input type="text" name="anumber"><br><br>
                <input type="hidden" name="requestType" value="createAccount">
                <input class="button" type="submit" value="Submit">
            </form>
        </main>
    </div>

</body>
</html>