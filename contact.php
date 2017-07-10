<?php
include "includes/header.php";

$sent = false;

if(isset($_POST['btnSubmit'])) {
  $name     = strip_tags(trim($_POST["txtName"]));
  $email    = strip_tags(trim($_POST["txtEmail"]));
  $subj     = strip_tags(trim($_POST["txtSubject"]));
  $mesg     = strip_tags(trim($_POST["txtMessage"]));

  $errors = array();

  if(empty($name)) { $errors[] = "Please specify your name."; }

  if(empty($email)) {
    $errors[] = "Please specify your email address.";
  }
  else {
    if(!preg_match("/([a-z0-9-\_]+)\@([a-z0-9-]+)\.([a-z0-9\.]+)/i", $email)) {
      $errors[] = "Please enter a valid email address.";
    }
  }

  if(empty($subj)) { $errors[] = "Please select an email subject."; }
  if(empty($mesg)) { $errors[] = "Please enter your email message."; }

  if(count($errors) == 0) {

    // Email Headers
    $headers = "From: {$name}<{$email}>\r\n";
    $headers .= "Return-Path: {$name}<{$email}>\r\n";
    $headers .= "Reply-To: {$name}<{$email}>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $mail_to = "andrewgormley91@gmail.com";
    $subject  = $subj;

    $content  = "<html>
            <body>
            <div style=\"color: #000;font-family:Arial; font-size: 12px;\">\n

              The following message has been sent via the Andrew Gormley Website contact form:<br>\n\n";

    $content  .=  "<br>From: <b>" . $name . "</b>";
    $content  .=  "<br>Email: <b>" . $email . "</b><br>\n";
    $content  .= "<br>Subject: <b>". $subject . "</b>\n";
    $content  .=  "<br><br>" . nl2br($mesg);
    $content  .=  "</div></body></html>";

    mail($mail_to, $subject, $content, $headers) or die("Could not send mail.");
    $sent = true;
  }
  else {
    $name = stripslashes($name);
    $email = stripslashes($email);
    $subj = stripslashes($subj);
    $mesg = stripslashes($mesg);
  }
}
else {
  $name = "";
  $email = "";
  $subj = "";
  $mesg = "";
}

$required = "<span style=\"color:red;font-weight: bold\">*</span>";
?>
    <div class="contact-area">

    <?php
    if($sent) {
    ?>
        <div class="green">
            <strong>Success!</strong>
            <p>Thanks for the message, I'll be in touch soon.</p>
        </div>
    <?php
    }
    else {
        if(count($errors) > 0) {
            echo "
            <div class=\"red\">
                The following problems were encountered:
                <ul>\n";

            foreach($errors as $error) {
                echo "
                    <li>" . $error . "</li>\n";
            }

            echo "
                </ul>
            </div>\n";
        }
    ?>

        <form action="contact.php" method="post">
        <input id="txtName" placeholder="Name" name="txtName" type="text" maxlength="50" style="width: 100%;" value="<?=$name?>" required>

        <input id="txtEmail" placeholder="Email" name="txtEmail" type="email" maxlength="50" style="width: 100%;" value="<?=$email?>" required>

        <input type="text" id="txtSubject" placeholder="Subject" name="txtSubject" maxlength="50" style="width: 100%;" value="<?=$subj?>" required>

        <textarea id="txtMessage" name="txtMessage" placeholder="Your Message" style="width: 100%; height: 200px;"><?=$mesg?></textarea>

        <input class="button" type="submit" id="btnSubmit" name="btnSubmit" value="Send Email Message">
        </form>
    <?php
    }
    ?>
    </div>

    <div class="copy-container columns small-12">
      <p>More of my work can be found on <a href="https://www.dribbble.com/AndrewGormley" target="_blank">@Dribbble</a>.</p>
      <a href="/">
        <div class="button">Home</div>
      </a>
    </div>

<?php include "includes/footer.php"; ?>

</body>
</html>
