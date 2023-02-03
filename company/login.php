<?php
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
        $data =trim($data);
        $data =stripslashes($data);
        $data =htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    
    
    if(empty ($username)){
        header("Location: user-login.php?error=Username is required");
        exit();
    }
    elseif(empty ($password)){
        header("Location: user-login.php?error=Password is required");
        exit();
    }
    else{
        $sql = "SELECT * FROM co_user_login WHERE user_name ='$username' AND password ='$password'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) ===1){
            $row = mysqli_fetch_assoc($result);

            if($row['user_name'] === $username && $row['password'] === $password){
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];

                header("Location: user-home.php");
                exit();
            } 
            else {
                header("Location: user-login.php?error=Incorrect Username or Password");
                exit();
            }
        }

        else{
            header("Location: user-login.php?error=Incorrect Username or Password");
            exit();
        }

    }
}

else {
    header("Location: user-login.php");
    exit();
}