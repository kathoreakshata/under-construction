<?php
if (isset($_POST['submit'])) {
    $to = "kathore.akshta123@gmail.com";
    $subject = "Enquiry";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $e_message = $_POST['message'];

    $message = "
<html>
<head>
<title>Enquiry</title>
</head>
<body>
<p>Someone has drop a enquiry mail for Brix Biopharma!</p>
<table>
<tr>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Message</th>
</tr>
<tr>
<td>$name</td>
<td>$phone</td>
<td>$email</td>
<td>$e_message</td>
</tr>
</table>
</body>
</html>
";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
// $headers .= 'From: <webmaster@example.com>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

    $result = mail($to, $subject, $message, $headers);

    if ($result == true) {
        echo "Message sent successfully...";
    } else {
        echo "Sorry, unable to send mail...";
    }
}
?>