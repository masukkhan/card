<?php
if (file_exists("data.txt")) {
    echo "<h2>Submitted Data:</h2>";
    $data = file_get_contents("data.txt");
    echo "<pre>$data</pre>";
} else {
    echo "<p>No data has been submitted yet.</p>";
}
?>
