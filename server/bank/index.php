<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scripts</title>
</head>
<body style="background-color: #111; color: #ddd">

<?php

if (!file_exists(__DIR__. '../../database.json'))
{
    file_put_contents(__DIR__. '../../database.json', json_encode([]));
}

class Bank
{
    private $database;

    function __construct()
    {
        $database = json_decode(file_get_contents(__DIR__. '../../database.json'));
    }

    function getAccounts()
    {
        return $database;
    }
}

class Account
{
    private $fname;
    private $lname;
    private $pnumber;
    private $anumber;
    private $money;
    private $pass;
    private $errorCode;

    function __construct($name, $lname, $pnumber, $anumber, $pass)
    {
        $this->money = 0;
        $this->error = 0;
        $this->fname = $name;
        $this->lname = $lname;
        $this->pnumber = $pnumber;
        $this->anumber = $anumber;
        $this->pass = $pass;

        //checks
            //on a failed check, set error to 1
    }

    function getFName()
    {
        return $this->fname;
    }

    function getLName()
    {
        return $this->lname;
    }

    function getPNumber()
    {
        return $this->pnumber;
    }

    function getANumber()
    {
        return $this->anumber;
    }

    function getError()
    {
        return $this->error;
    }
}

/*
Error codes:
0 - everything's fine
1 - data entered is incorrect
*/

//if request method post && request is to create an account
    //create an object with the given data
    //have checks in the constructor that return an error if there's a problem
        //upon an error, redirect to an error page
    //grab the array from the json file
    //create a new entry with the data
    //encode back to json
    //redirect to a success page
if(/*$_SERVER['REQUEST_METHOD'] === 'POST'*/ ($_POST['requestType'] ?? '') === 'createAccount')
{
    $account = new Account(($_POST['fname'] ?? ''), ($_POST['lname'] ?? ''), ($_POST['pnumber'] ?? ''), ($_POST['anumber'] ?? ''));

    if (!$account->getError())
    {
        //throw out an arror
    }

    $database = json_decode(file_get_contents(__DIR__. '../../database.json'));
    $database[] = array([ ['fname', $account->getFName()], ['lname', $account->getLName()], ['pnumber', $account->getPNumber()], ['anumber', $account->getANumber()] ]);
    file_put_contents(__DIR__. '../../database.json', json_encode($database));

    header('Location: ../../client/message/index.php?message=1');
    die();
}



//database:
    //list of accounts
        //list of elements
            //key - value pairs

//if the page is accessed directly...
if($_SERVER['REQUEST_METHOD'] !== 'POST')
{
    header('Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ');
    die();
}


?>
    
</body>
</html>