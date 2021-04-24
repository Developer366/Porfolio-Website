<!-- Kamil's Personal Webiste Portfolio 1.0 -->
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Kamil Peza's Personal Website </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS Links -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/style.css">

  <!-- JavaScript links-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body>

<div class="jumbotron text-center" style="margin-bottom:0">
</div>

<!--Nav Bar with page links-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="/index.html" style="color:Violet; font-family: 'Brush Script MT', cursive; font-size:180%;">Kamil Peza's Portfolio Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">About Me </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="HTML/portfolio.html">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="HTML/contact_me.php">Contact Me</a>
      </li>
    </ul>
  </div>
</nav>
<!--end of nav bar-->

	<div class="container-fluid" style="margin-top:40px;">
			<h1 id="Interests">Want to contact me? Send me an Email.</h1>

      <a href="https://www.linkedin.com/in/kamil-peza/" target="_blank" style="color:lightblue; font-size:4vw;">My Linkedin Profile: (https://www.linkedin.com/in/kamil-peza/)</a><br><br><br>

      <a href="https://github.com/Developer366" target="_blank" style="color:lightblue; font-size:4vw;">My Github Account: (https://github.com/Developer366)</a><br><br><br>

	</div>
	<div class="container">

<!-- enter your name-->
<form  action="contact_me.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" name="name" placeholder="Enter your full name" required>
    </div>
<!-- enter your Email-->
    <div class="form-group">
      <label for="email">Your Email:</label>
      <input type="Email" class="form-control" name="email" placeholder="Enter your Email">
    </div>
<!-- enter your Subject-->
    <div class="form-group">
      <label for="subject">Subject:</label>
      <input type="text" class="form-control" name="subject" placeholder="Subject of your Message">
    </div>
<!-- enter your Message-->
    <div class="form-group">
      <label for="pwd">Your message to me:</label>
      <textarea class="form-control" placeholder="Your Message and Phone number (optional)" name="message" cols="50" row="5" required></textarea>
    </div>
    <br>

    <button type="submit" name="submit" class="btn btn-primary">Send Email</button>
  </form>

</div>

<?php
if (isset($_POST['submit'])) {
      $to = "contact@kamilpeza.com";
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      $name = $_POST['name'];
      $visitor_email = $_POST['email'];

      $headers = "From: $name".  "\r\n";
      $headers .= "Reply-To: $visitor_email \r\n";

      //mail(to,subject,message,headers,parameters);
      mail($to, $subject, $message, $headers);

      //header("Location: contact_me.php");
      echo "<p>Your message was sent!</p>";
      //print_r($_GET)
      //$message = wordwrap($message, 70);
    }
?>

<footer class="container-fluid bg-4 text-center" font-size:20px; line-height: 150%;>
  <p>Kamil Peza &copy;Feb 2020</p>
</footer>

</body>
</html>
