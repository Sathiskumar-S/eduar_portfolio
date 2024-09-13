<?php

include_once "includes/Database.class.php";

//function for loading the template files
function load_template($filename){
    include $_SERVER['DOCUMENT_ROOT']."/_templates/$filename.php";
    // echo $filename;
}

global $__site_config;
$__site_config = "../eduarconfig.json";


function get_config($key, $default = null)
{
    global $__site_config;
    // Read the content of the file
    $json_content = file_get_contents($__site_config);

    // Decode the JSON data
    $array = json_decode($json_content, true);

    if (isset($array[$key])) {
        return $array[$key];
    } else {
        // Debugging: Print the key that was not found
        echo "Key '$key' not found in config.\n";

        return $default;
    }
}


?>