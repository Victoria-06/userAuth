<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

$myfile = fopen("../storage/users.csv", "a") or die("Unable to open file!");
// $data1=implode(",", $_POST );
$data= $username . ",". $email . ",". $password ."\t\n"; 

$fwrite=fwrite($myfile, $data); 
fclose($myfile);
// print_r ($data1);

if($fwrite){
    echo "User Successfully registered"; 
}


}

function registerUser($username, $email, $password){
    //save data into the file
    
    // echo "OKAY";
}
echo "HANDLE THIS PAGE";


