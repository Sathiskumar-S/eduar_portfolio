 <pre>

<?php
//echo $_SERVER['DOCUMENT_ROOT'];

global $__site_config;
$__site_config = "../eduarconfig.json";

$myfile = fopen($__site_config,"r");
echo fread($myfile, filesize($__site_config));

?>

<?php 
include_once "./libs/load.php";

// print_r($_SERVER);

$conn = Database::getConnection();

if($conn){
    print("<h1> database connected successfully...</h1>");
} else{
    print("<h1> There will be an some error occured </h1>");
}


?>
</pre>
