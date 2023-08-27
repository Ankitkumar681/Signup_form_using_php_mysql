<?php

    session_start();
    if(!isset($_SESSION['username'])){
        echo "You are logged out";
            header('location:logins.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <?php include 'css/styles.php' ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymus" />
        <body>
            <header>
                <nav class="navbar">
                    <div class="logo">
                        <a href="https://www.ankitprojects.com/" target="_blank">Ankit Technical</a>
                    </div>

                    <div class="menu">
                        <ul>
                            <li><a href="#" class="active">home</a></li>
                            <li><a href="#" >gallery</a?</li>
                            <li><a href="#" >services</a?</li>
                            <li><a href="#" >portfolio</a?</li>
                            <li><a href="#" >about</a?</li>
                        </ul>
                    </div>

                    <div class="contact_btn">
                        <a href="./logout.php">Logout</a>
                    </div>
                </nav>
                    <div class="ceter_content">
                        <h1>Hello this is <?php echo $_SESSION['username'];?></h1>
                        <h2>youtuber / full stack developer</h2>
                    </div>

                    <div class="social_network">
                        <div class="fa_icons">
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>                   
                        </div>
                        <div class="fa_icons">
                            <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>                   
                    </div>
                    <div class="fa_icons">
                            <a href="https://www.instagram.com/a_n_k_i_t.___/" target="_blank">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>                   
                    </div>
                    <div class="fa_icons">
                            <a href="#">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </a>                   
                    </div>
                </div>

                <div class="grid_sec">
                    <img src="./images/an.png.png">
                </div>
            </header>

        </body>
