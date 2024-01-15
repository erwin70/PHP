<!DOCTYPE html>
<?php
session_start();
include("inc/connection.php");
if(!isset($_SESSION['user_email'])){
header("location: signin.php");
}
?>
<html>
<head>
    <title>Mijn chat Elderschans</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div class="container main-section">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 left-sidebar">
                <div class="input-group-btn searchbox">
                    <div class="input-group-btn">
                        <a href="inc/find_frends.php"><button class="btn btn-default search-icon" name="search_user" type="submit">Voeg nieuwe vriend toe.</button></a>
                    </div>
                </div>
                <div clqss="left-chat">
                    <ul>
                        <php? include(inc/get_)
                    </ul>
                </div>
            </div>
            <div class="row">

                <!-- het verkrijgen van de gebruikersinformatie van die heeft ingelogd -->

                <?php
                $user = $_SESSION['user_email'];
                $get_user = "select * from users where user_email='$user'";
                $run_user = mysqli_query($con, $get_user);
                $row = mysqli_fetch_array($run_user);

                $user_email = $row['user_email'];
                $user_name = $row['user_name'];
                ?>

                <!-- het verkrijgen van de gebruikersgegevens waarop de gebruiker klikt -->

                <?php
                    if (isset($_GET['user'])){

                        global $con;

                        $get_user_name = $_GET['user_name'];
                        $get_user = "select * from users were user_name='$get_username";

                        $run_user = mysqli_query($con, $get_user);

                        $row_user = mysqli_fetch_array($run_user);

                        $username = $row_user['user_name'];
                        $user_profile_image = $row_user['user_profile'];


                    }

                    $total_messages = "select * from users_chat where (sender_username='$user_name' AND reciver_username='$username') 
                        OR (reciver_username='$user_name' AND sender_username='$username')";
                        $run_message = mysqli_query($con, $total_messages);
                ?>

                <div class="col-md-12 rigt-header">
                    <div class="right-header-img">
                        <img src="<?php echo"$user_profile_image"; ?>">
                    </div>
                    <div class="right-header-detail">
                        <form method="post">
                            <p><?php echo "$username"; ?></p>
                            <span><?php echo $total; ?> berichten<</span>&nbsp &nbsp
                            <button name="logout" class="btn btn-danger">Afmelden</button>
                        </form>

                        <?php
                        if(isset($POST['logout'])){
                            $update_msg = mysqli_query($con, "UPDATE users SET log_in='offline' WHERE user_name=$user_name'");
                            header("Location:logout.php");
                            exit();
                        }
                        ?>
                </div>
                </div>
                </div>
                <div class ="row">
                    <div id="scrolling_to_bottom" class="col-12 right-header-contentChat">
                        <?php $update_msg = mysqli_query($con, "UPDATE users_chat SET msg_status='read' WHERE sender_username='$username' AND reciver_username='$user_name'");

                        $sel_msg = "select * from users_chat where (sender_username='$user_name' AND reciver_username='$username') OR
                                                                   (reciver_username='$user_name' AND sender_username='$username') Order by 1 ASC";
                        $run_msg = mysqli_query($con, $sel_msg);

                        while ($row = mysqli_fetch_array($run_msg)) {

                            $sender_username = $row['sender_username'];
                            $receiver_username = $row['reciver_username'];
                            $msg_content = $row['msg_content'];
                            $msg_date = $row['msg_date'];
                        ?>
                        <ul>
                            <?php 
                            if($user_name == $sender_username AND $username == $reciver_username){
                                echo"
                                    <li>
                                        <div class='rightsite-right-chat'>
                                            <span> $username <small>$msg_date</small></span>
                                            <p>$msg_content</p>
                                        </div>
                                    </li>
                                ";
                            }
                            else if($user_name == $reciver_username AND $username == $sender_username){
                                echo"
                                    <li>
                                        <div class='rightsite-left-chat'>
                                            <span> $username <small>$msg_date</small></span>
                                            <p>$msg_content</p>
                                        </div>
                                    </li>
                                ";
                            }    
                            
                        ?>
                    </ul>
                    <?php 
                        }
                    ?>
            </div>
            <div class ="row">
                <div class="col-md-12 right-chat-textbox">
                    <form method="post">
                        <input autocomplete="off" type"text" name"msg_content" placeholder="Schrijf je bericht...">
                        <button class="btn" name="submit"><i class="fo fa-telegram" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
        if(isset($_POST['submit'])){
            $msg = htmlentities($_POST['msg_content']);

            if ($msg==""){
            echo"   <div class='alert alert-danger'>
                        <strong><center>Het is niet mogelijk een leeg bericht te verzenden.</center></strong>
                    </div>
            ";
            }
            else if (strlen($msg)>100){
                echo"   <div class='alert alert-danger'>
                        <strong><center>Bericht is te lang. Gebruik maximaal 100 karakters.</center></strong>
                        </div>
                ";
            }
            else{
                    $insert = "insert into users_chat(sender_username, reciver_username, msg_content, msg_status, msg_date)
                                                values  ('$user_name', '$username', '$msg', '$unread', NOW())";
                    $run_insert = mysqli_query($con, $insert);

            }
        }
    ?>
                        
</body>
</html>



