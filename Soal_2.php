<?php 

// Function
function is_username_valid($username) {
    if(preg_match("/^[a-z]{5,9}$/", $username)) {
        echo $username . " True";
    } else {
        echo $username . " False";
    }
    
}

function is_password_valid($password) {
    if(preg_match("/^(?=.*\d)(?=.*[A-Z])(?=.*[@])[0-9A-Za-z!@#$%]{8,}$/", $password)) {
        echo $password . " True";
    } else {
        echo $password . " False";
    }
}

function is_phone_valid($phone) {
    if(preg_match("/^[+62]{3}[0-9]{8,15}$/", $phone)) {
        echo $phone . " True";
    } else {
        echo $phone . " False";
    }
}

function is_email_valid($email) {
    if(preg_match("/^[a-z0-9]+@[a-z0-9]+(\.[a-z]{2,})$/i", $email)) {
        echo $email . " True";
    } else {
        echo $email . " False";
    }
}

// View
echo "Username<br>";
is_username_valid("zeronull");
echo "<br>";
is_username_valid("Ayu99v");
echo "<br>";
echo "<br>";

echo "Password<br>";
is_password_valid("p@ssW0rd#");
echo "<br>";
is_password_valid("C0d3YourFuture!#");
echo "<br>";
echo "<br>";

echo "Phone<br>";
is_phone_valid("+6281234567890");
echo "<br>";
is_phone_valid("081234567890");
echo "<br>";
echo "<br>";

echo "Email<br>";
is_email_valid("adjie@mail.da");
echo "<br>";
is_email_valid("fitri@mail.c");
echo "<br>";
echo "<br>";


?>