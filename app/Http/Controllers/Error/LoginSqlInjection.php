<?php
namespace App\Http\Controllers\Error;
require_once '../../Models/SqlInjectionModel.php';

class LoginSqlInjection
{
    public function login()
    {
        global $db;
        $username = $_POST['username'];
        $password = $_POST['password'];
        try {
            $query = "SELECT * FROM Users WHERE Username = '" . $username . "' AND Password = '" . $password . "'";
            $statement = $db->prepare($query);
            $statement->bindParam(':username', $username);
            $statement->bindParam(':password', $password);
            $statement->execute();

            $result = $statement->fetchColumn();

            if ($result > 0) {
                return true; // Đăng nhập thành công
            } else {
                return false; // Sai thông tin đăng nhập
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            exit();
        }
    }
}
?>