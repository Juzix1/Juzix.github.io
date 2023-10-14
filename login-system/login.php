<?php
session_start();
include "db_connect.php";

if (isset($_POST['uname']) && isset($_POST['psw'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $psw= validate($_POST['psw']);

    if(empty($uname)){
        header("Location: ../index.php?error=User name is requierd");
        exit();
    }else if(empty($psw)){
        header("Location: ../index.php?error=User password is requierd");
        exit();
    }else{
        $sql = "Select * FROM users where user_name='$uname' AND password='$psw'";

        $result = mysqli_query($conn, $sql);
        
            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['user_name'] == $uname && $row['password'] == $psw){
                    $SESSION['user_name'] = $row['user_name'];
                    $SESSION['name'] = $row['name'];
                    $SESSION['id'] = $row['id'];
                    header("Location: home.html");
                }
            }else{
                header("Location: ../index.php?error=Incorrect User name or password");
                exit();
            }
        }
        
    }else{
    header("Location: ../index.php?error");
    exit();
    }






?> 