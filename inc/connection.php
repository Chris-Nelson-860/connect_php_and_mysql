<?php
try{
$db = new PDO("mysql:host=localhost;dbname=database;port=8889","root","root");
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    echo "Unable to connect to database <br>";
    echo $e->getMessage();
    exit;
}

echo "You are connected to the database!";

//The try catch method is how you handle exceptions.  
//The code in the try block is what you are trying to execute.
//If it works, code moves on and keeps running
//If it doesn't work, the catch blocks code is executed and here we included the exit statement so that code stops running.
//The getMessage() function will return the error message as a string.
//In this case, if it sucessful, it will echo you are connected to the database.


//SET ATTRIBUTE in the try block
    //I need to spend more time on that, I don't totally understand it.