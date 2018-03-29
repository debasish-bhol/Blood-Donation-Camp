<?php
include("conn.php");
$id = $_GET['id'];
$pid = $_GET['pid'];

$q = "SELECT * FROM signup where id = $id";
$r = mysqli_query($con, $q);
$a = mysqli_fetch_array($r);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="css/about.css">

</head>
<body>
<div class="main" id="about">
  <div class="bio"><img src="<?php echo $a['img']; ?>" class="profile-img" />
    <h3 class="header"><?php echo $a['name']; ?></h3>
    <p><?php echo $a['mob']; ?></p>
    <p><?php echo $a['bgp']; ?></p>
    <p><?php echo $a['email']; ?></p>
   
    <a class="bio-link" href="index.php?id=<?php echo $pid; ?>">Home<i class="fa fa-codepen"></i></a>

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
</body>
</html>