<?php
if (array_key_exists("license", $_POST)) {
    $license = $_POST["license"];
    echo $license. PHP_EOL;
    if ($license == "") {
        $license = "none";
    }
    $file = fopen("license.txt", "w");
    fwrite($file, $license);
    fclose($file);
} else {
    echo "No license";
}
