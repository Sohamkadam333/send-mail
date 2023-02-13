<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Send Mail</title>
</head>

<body>
  <form method="POST" action="./send_mail.php">
    <h2>Contact us</h2>
    <p>
      <label>First Name:</label>
      <input name="name" type="text" />
    </p>
    <p>
      <label>Email Address:</label>
      <input style="cursor: pointer;" name="email" type="text" />
    </p>
    <p>
      <label>Message:</label>
      <textarea name="message"></textarea>
    </p>
    <p><input type="submit" value="Send" /></p>
  </form>
</body>

</html>