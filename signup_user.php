<?php
include("inc/connection.php");
    if(isset($_POST['sign_up'])){

        $name = htmlentities(mysqli_real_escape_string($con, $_POST['user_name']));
        $pass = htmlentities(mysqli_real_escape_string($con, $_POST['user_pass']));
        $email = htmlentities(mysqli_real_escape_string($con, $_POST['user_email']));
        $country = htmlentities(mysqli_real_escape_string($con, $_POST['user_country']));
        $gender = htmlentities(mysqli_real_escape_string($con, $_POST['user_gender']));
        $rand = rand(1, 2);
        

        if ($name==''){
            echo"<script>alert('Wij kunnen niet jouw naam controleren')</script>";
        }

        if(strlen($pass)<8){
            echo"<script>alert('Het paswoord moet minimum 8 karakters hebben !!!')</script>";
            exit();
        }

        $check_email = "select * from users where user_email='$email'";
        $run_email = mysqli_query($con, $check_email);

        $check = mysqli_num_rows($run_email);

        if($check==1){
            echo"<script>alert('De email bestaat al, probeer opnieuw of meld je aan.')</script>";
            echo"<script>window.open('signup.php', '_self')</script>"; 
            exit();
        }
        if ($rand == 1)
            $profile_pic = "img/man.jpg";
        else if ($rand == 2)
            $profile_pic = "img/vrouw.jpg";

        $insert = "insert into users (user_name, user_pass, user_email, user_profile, user_country, user_gender)values('$name', '$pass', '$email', '$profile_pic', '$country', '$gender')";

        $query = mysqli_query($con, $insert);

        if ($query){
            echo"<script>alert('Gefeliciteerd $name, jouw aanmeld gegevens zijn succesvol aangemaakt')</script>";

            echo"<script>window.open('signin.php', '_self')</script>";
        }
        else{
            echo"<script>alert('Registratie mislukt, aub probeer opnieuw')</script>";

            echo"<script>window.open('signup.php', '_self')</script>";
        }
    }
?>