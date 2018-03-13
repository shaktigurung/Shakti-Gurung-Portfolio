<?php 

$recipient = "mr.shakti.gurung@gmail.com";
 $name = check_input($_POST['name'], "Enter your name ") ; 
 $email = check_input($_POST['email']) ; 
 $message = check_input($_POST['message'], " Write your message") ; 

 //Check Email Validation
 //$email = htmlspecialchars($_POST['email']);
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
{
    die("E-mail address is not valid");
}
 /* Let's prepare the message for the e-mail */
$comment = "Hello!

Your contact form has been submitted by:

Name: $name
E-mail: $email
Message: $message

";
//Sending Mail
mail($recipient,$comment);
//Thank you Page
header('Location:thankyou.php');
?>

<html>
<body>
Your name is: <?php echo $name; ?><br />
Your e-mail: <?php echo $email; ?><br />
<br />
Message:<br />
<?php echo $message; ?>
</body>
</html>

<?php
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>
