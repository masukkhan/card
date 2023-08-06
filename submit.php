
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $cardNumber = $_POST["cardNumber"];
    $expiration = $_POST["expiration"];
    $cvv = $_POST["cvv"];
    
    // Format the data
    $data = "Name: $name\nCard Number: $cardNumber\nExpiration: $expiration\nCVV: $cvv\n\n";

    // Save the data to a text file (e.g., data.txt)
    $file = fopen("data.txt", "a"); // 'a' mode appends data
    fwrite($file, $data);
    fclose($file);

    echo "Form data saved successfully!";
}
?>
