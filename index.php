<?php

include "libs/load.php";


//header template file
load_template("_header");


//send the contact form data into database
if(isset($_POST["contactform"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  $conn = Database::getConnection();
  $sql = "INSERT INTO contacts (`name`,`email`,`phone`,`message`) VALUES ('{$name}','{$email}','{$phone}','{$message}')";
  $result = $conn->query($sql);


  if($result){
    echo "<script>Console.log('Data Inserted into database successfully')</script>";
  }else{
    echo "<script>Console.log('There will be a some error occured during insert data into database')</script>";
  }

  header("Location: index.php");

}


//navbar template file
load_template("_navbar");

//swiper template file
load_template("_swiper");

//service template file
load_template("_services");

//parallax template file
load_template("_parallax");

//syllabus template file
load_template("_syllabus");

//team members template file
load_template("_team");

//appdata template file
load_template("_appdata");

//testimonial template file
load_template("_testimonial");

//blog template file
load_template("_blog.php");

//contact data template file
load_template("_contactdata");

//contact form template file
load_template("_contactform");

//footer template file
load_template("_footer");

?>



     
     

     
    