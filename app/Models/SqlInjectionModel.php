<?php
$uri = "mysql://avnadmin:AVNS_HxJ0KL7R6R9aGqhSh7n@mysql-6c78cd5-db25ts4.i.aivencloud.com:27943/defaultdb?ssl-mode=REQUIRED";

$fields = parse_url($uri);

// build the DSN including SSL settings
$conn = "mysql:";
$conn .= "host=" . 'mysql-6c78cd5-db25ts4.i.aivencloud.com';
$conn .= ";port=" . '27943';
$conn .= ";dbname=bug_buster";
$conn .= ";sslmode=verify-ca;sslrootcert=ca.pem";


try {
    $db = new PDO($conn, $fields["user"], $fields["pass"]);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    exit();
}
?>
