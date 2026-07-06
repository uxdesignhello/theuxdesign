<?php
$subject    = 'Comments from theUXdesign.com'; // Subject of your email
$to         = 'uxdesign.hello@gmail.com'; //Your e-mail address
$headers    = 'MIME-Version: 1.0' . "\r\n" .
              'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$message    = 'Name: ' . $_REQUEST['name'] . ' <br/>' .
              'Email: ' . $_REQUEST['email'] . ' <br/>' .
              'Phone: ' . $_REQUEST['phone'] . ' <br/>' .
              'Comments: ' . $_REQUEST['message'];
if (@mail($to, $subject, $message, $headers))
{
 echo 'sent';
}
else
{
 echo 'failed';
}
?>