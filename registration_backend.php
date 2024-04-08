<?php
require_once 'db.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    try {
        $query = "INSERT INTO registration (username,email,password,confirmPassword) VALUES (:username, :email, :password, :confirmPassword);";
        $stmt=$pdo->prepare($query);
        $stmt->bindParam(':username',$username);
        $stmt->bindParam(':email',$email);
        $count = [
            'cost'=>12
        ];
        $hasedpassword = password_hash($password,PASSWORD_BCRYPT,$count);
        $hasedconfirmpassword = password_hash($confirmPassword,PASSWORD_BCRYPT,$count);
        $stmt->bindParam(':password',$hasedpassword);
        $stmt->bindParam(':confirmPassword',$hasedconfirmpassword);
        $result=$stmt->execute();
        if($result){
            echo "data inserted successfully";
        }else{
            echo "data inseriton fail";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }
