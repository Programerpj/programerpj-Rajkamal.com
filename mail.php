
<?php

//get data from form
$Name =$_POST['Name'];

$Email= $_POST['Email']; 
$Subject= $_POST['Subject'];
$message=$_POST['Message'];

$to= "rajkmalsingh6959@mail.com";

$subject = "Mail From website";

$txt = "Name =" . $Name . "\r\n Email =" . $Email . "\r\n Meassage =" . $Message;  
$Headers = "From: programerpj/rajkamal.com". "\r\n";

"CC: somebodyelse@example.com"; 
if($email!=NULL) {


mail($to, $subject, $txt, $headers);

}

//redirect
header("Location: index.html");
?>