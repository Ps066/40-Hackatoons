<?php

$email = $_POST['sender'];


if(filter_var($email, FILTER_VALIDATE_EMAIL))
{
// echo "Valid email";
// echo "<br>";
$count = 0;
$domain = "";
$chars = str_split($email);
$email_len = strlen($email);

//Parses through whole string
foreach($chars as $ch){
    $count = $count + 1;
    if($ch == "@")
    {
    break;
    }
}

// echo "<br>";

//Prses through characters after @
for($x=$count ; $x<$email_len ; $x++){
    $domain = $domain.$email[$x];
}
// echo $domain;

$e_count=0;
$exe = "";
$echars = str_split($email);
$email_elen = strlen($email);

foreach($echars as $ch){
    $e_count = $e_count + 1;
    if($ch == ".")
    {
    break;
    }
}
for($x=$e_count ; $x<$email_elen ; $x++){
    $exe = $exe.$email[$x];
}
// echo "<br>";
// echo $exe;



}
else
{
echo "Invalid Email";
}

$parts = explode("@",$email); 
$username = $parts[0]; 
// echo $username;

$allowed = array("gmail.com","yahoo.com");

if(in_array($domain,$allowed)){
    // echo "success";

    echo "<script> alert('The following Mail and the sender seem legitimate and geninue'); </script>";
}else{
    // echo "fail"; 
    echo "<script> alert('The following mail seem malicious and junk, please block and report spam'); </script>";
}


?>