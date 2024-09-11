<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "Gbrcy$!014763");
define("DATABASE", "login_System");

$con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

if(!$con){
    die("Connection Failed");
}
else{
    echo "Connection Established....";
}

?>