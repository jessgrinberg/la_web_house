<? php
  visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'lawebhouse.com';

  $email_subject = "New Form Submission";

  $email_body = "User Email: $visitor_email.\n".
                "User Message: $message.\n";

  $to = "jessgrinberg@gmail.com";

  $headers = "From $email_from \r\n";

  $headers .= "Reply-to $visitor_email \r\n";

  mail($to, $email_subject, $email_body, $headers);

  header("Location: home.html");
  
 ?>
