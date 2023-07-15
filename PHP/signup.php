<?php

include('config.php');

    if(isset($_POST['signup'])){
                                
        $user = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conPassword = $_POST['confirm_password'];

    
        $sql = "SELECT email FROM users WHERE email = '$email' LIMIT 1";
        $check_query = mysqli_query($connection,$sql);
        $count_email = mysqli_num_rows($check_query);
                            
        if ($count_email > 0) {
            echo "<script> document.getElementById('errorSignup').innerText = 'Email is already exist !!';
            document.getElementById('errorSignup').style.color  = '#C24641';</script>"; 
        } else { 
            $qu = "insert into users (email, password, username) value ('$user','$email','$password')";
            if(mysqli_query($connection, $qu)) {
                echo "<script>document.getElementById('confirmSignup').innerText = 'User Registeration Completed !!';
                document.getElementById('errorSignup').style.color  = '#8FBC8F';
                        setTimeout(function(){document.getElementById('message8').innerHTML = ''; }, 3000);</script>";
                echo "<script> location.href='index.php'; </script>";
            }
        }                            
    }     
?>