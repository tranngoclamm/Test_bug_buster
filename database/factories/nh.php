<?php

// Thông tin kết nối cơ sở dữ liệu
$databaseName = 'bug_buster';
$databaseHost = 'mysql-6c78cd5-db25ts4.i.aivencloud.com';
$databaseUsername = 'avnadmin';
$databasePassword = 'AVNS_HxJ0KL7R6R9aGqhSh7n';

// Kết nối cơ sở dữ liệu
$pdo = new PDO("mysql:host=$databaseHost;port = '27943';dbname=$databaseName", $databaseUsername, $databasePassword);

// Thực hiện truy vấn
$query = "SELECT * FROM users";
$statement = $pdo->query($query);
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

// Hiển thị kết quả
foreach ($results as $result) {
    print_r($result);
}