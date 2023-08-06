<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $cardNumber = $_POST["cardNumber"];
    $expiration = $_POST["expiration"];
    $cvv = $_POST["cvv"];
    
    // Save the data to a text file (e.g., data.txt)
    $file = fopen("data.txt", "a"); // 'a' mode appends data
    fwrite($file, "Name: $name\nCard Number: $cardNumber\nExpiration: $expiration\nCVV: $cvv\n\n");
    fclose($file);
}
?>
