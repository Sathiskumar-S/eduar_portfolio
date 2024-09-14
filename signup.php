<?php

//Loading template files and database connection
include "libs/load.php";

if (isset($_POST["signup"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashedPassword = md5($password);
    $schoolname = $_POST["schoolname"];
    $medium = $_POST["medium"];
    $standard = $_POST["standard"];

    //echo "$username";

    $conn = Database::getConnection();  
    $sql = "INSERT INTO `users`( `name`, `password`, `email`, `standard`, `schoolname`, `Medium`) VALUES ('{$username}', '{$hashedPassword}', '{$email}', '{$standard}','{$schoolname}','{$medium}')";
    $result = $conn->query($sql);
    

    // TODO : Handle with javascript popup before delete the element
    // if(!$result){
    //     die("MYSQL FAILED" . $conn->error());
    // } else{
    //     echo "The item is deleted successfully";
    // }
    if (mysqli_connect_errno()) { // check connection
        printf("Connect failed: %s\n", mysqli_connect_error);
        exit();
    }
    header("Location: index.html");
}


load_template("_signup");

?>