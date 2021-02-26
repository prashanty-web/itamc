<?php
// variable setting
$name = $_REQUEST['Name'];
$email = $_REQUEST['Email'];
$number = $_REQUEST['Number'];
$message = $_REQUEST['Message'];

//check input fields
if (empty($name) || empty($email) || empty($number) || empty($message))
{
	echo "Please fill all the fields";
}
else
{
	mail("prashant.picar@gmail.com", "Email From", $message , "From: $name $number <$email>");
	echo "<script type='text/javascript'>alert('your message sent successfully');
	window.history.go(-1);
	</script>";
	
}
?>
	