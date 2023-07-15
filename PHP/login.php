<?php

    include('config.php');

    if (isset($_POST['login'])) {
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = $_POST['password'];

        $sql = "select * from users where email = ".$email . "and password = ".$password.;

        $result = mysqli_query($connection, $sql);
        // $rows = mysqli_fetch_array($result);

        while ($rows = mysqli_fetch_array($result)) {
            $name = $rows[0];
        }
        
        $countRows = mysqli_num_rows($rows);

        if (mysqli_num_row(mysqli_query($connection,$sql)) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;
            $_SESSION["loggedin"] = true;

            $sql = 'update users set lastVisit = '.now().'where email = '$_SESSION['email'];

            $update = mysqli_query($connection, $sql);

            header('location: userPage.html');
            
        }else {
            echo "<script>document.getElementById('errorLogin').innerText = 'The email or password is incorrect!'; 
            document.getElementById('errorLogin').style.color  = '#C24641';</script>"
        }
    }
?>