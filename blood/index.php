<?php
include("conn.php");

$id = $_GET['id'];
$id1 = $id;

$q = "SELECT * FROM signup WHERE id = $id";
$r = mysqli_query($con, $q);
$a = mysqli_fetch_array($r);

/*print_r($a);*/
?>


<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blood Care</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/about.css">
    <style type="text/css">
        .iimg{
            height: 150px;
            width: 150px;
            background-color: yellow;
            border-radius: 100%;
        }
    </style>

    
</head>

<body>
    <div id="mobile-menu-open" class="shadow-large">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <!-- End #mobile-menu-toggle -->
    <header>
        <div id="mobile-menu-close">
            <span>Close</span> <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <ul id="menu" class="shadow">
            <li>
                <a href="#about">Profile</a>
            </li>
            <li>
                <a href="#experience">Blood Centers</a>
            </li>
            <li>
                <a href="#skills">Same Category</a>
            </li>
            <li>
                <a href="#contact">Emergency Help</a>
            </li>
        </ul>
    </header>
    <!-- End header -->

    <div id="lead">
        <div id="lead-content">
            
        </div>

        <div id="lead-overlay"></div>

        <div id="lead-down">
            <span>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </span>
        </div>
        <!-- End #lead-down -->
    </div>
    <!-- End #lead -->
<div class="main" id="about">
  <div class="bio"><img src="<?php echo $a['img']; ?>" class="profile-img" />
    <h3 class="header"><?php echo $a['name']; ?></h3>
    <p><?php echo $a['mob']; ?></p>
    <p><?php echo $a['bgp']; ?></p>
    <p><?php echo $a['email']; ?></p>

  </div>
  <div class="contact">
    <form id="form">
      <legend class="header">Get In Touch</legend>
      <fieldset>
        <label class="fa fa-user" for="name-input" aria-hidden="true"></label>
        <input type="text" placeholder="Your name..." id="name-input"/>
      </fieldset>
      <fieldset>
        <label class="fa fa-envelope" for="email-input" aria-hidden="true"></label>
        <input type="email" placeholder="Your email..." id="email-input"/>
      </fieldset>
      <fieldset>
        <label class="fa fa-comment" for="message-input" aria-hidden="true"></label>
        <textarea placeholder="Your Message..." id="message-input"></textarea>
      </fieldset>
      <fieldset>
        <button type="submit" id="btn-submit">Send</button>
      </fieldset>
    </form>
  </div>
</div>
    <!-- End #about -->

    <div id="experience" class="background-alt">
        <h2 class="heading">Blood Centers</h2>
        <div id="experience-timeline">
            <div data-date="">
                <h3>Jalandhar</h3>
                <h4></h4>
                <p>
                    <b>GT Road: </b>Gagan Blood Bank<br>
                    <b>Email: </b> gaganstore@gmail.com<br>
                    <b>Mobile:</b>9056558975
                </p>
            </div>

            <div data-date="">
                <h3>Baharagora</h3>
                <h4></h4>
                <p>
                    <b>NH 33: </b>Sarangi Blood Bank<br>
                    <b>Email: </b> sarangistore@gmail.com<br>
                    <b>Mobile:</b>9056554575
                </p>
            </div>

            <div data-date="">
                <h3>Jamshedpur</h3>
                <h4></h4>
                <p>
                    <b>NH 18: </b>TCP Blood Bank<br>
                    <b>Email: </b> tcpblood@gmail.com<br>
                    <b>Mobile:</b>8056524489
                </p>
            </div>
        </div>
    </div>


    <div id="skills">
        <h2 class="heading">Same Blood Group</h2>
        <ul>
            <?php

            $p = $a['bgp'];
            $c = "SELECT bgp,img,id FROM signup WHERE bgp = '$p' ";
            $c1 = mysqli_query($con, $c);

            while ($c2 = mysqli_fetch_assoc($c1))
            {
                $ig = $c2['img'];
                $id = $c2['id'];

                echo "<a href=\"profile.php?id=$id&pid=$id1\"><li style=\"border-radius:100%;\">
                    <img src=\"$ig\" class=\"iimg\">
                  </li></a>";   
            }

            ?>
            
        </ul>
    </div>
    <!-- End #skills -->

    <div id="contact">
        <h2>Contact us for urgent blood</h2>
        <div id="contact-form">
            <form method="POST" action="yoyo.php">                     <!--  https://formspree.io/debasishbhol5@gmail.com  this for email -->
                <!-- <input type="hidden" name="_subject" value="Contact request from personal website" /> -->
                <input type="text" name="mno" placeholder="Your numbers" required>  <!-- name="_replyto" -->
                <textarea name="message" placeholder="Your message" required></textarea>
                <button type="submit" name="submit">Send</button>
            </form>
        </div>
        <!-- End #contact-form -->
    </div>
    <!-- End #contact -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/scripts.min.js"></script>
</body>

</html>
