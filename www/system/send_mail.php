<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Koupaliště Dolní Bukovina</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php
// Function for basic field validation (present and neither empty nor only white space
function isBlankString($var){
    return (!isset($var) || trim($var)==='');
}

$name = $_POST['name'];
$from = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$mailAddress = 'info@koupaliste-bukovina.cz';

if (!isBlankString($_POST['submit']) && !isBlankString($name) && !isBlankString($from) && !isBlankString($message)) {
   /* Send the email */
   $headers = "From: {$from}\r\n";
   $headers.= 'Content-Type: text/plain;charset=utf-8\r\n';
   $subject = "=?utf-8?b?".base64_encode('Zpráva od uživatele ['.$name.']: '.$subject)."?=";
   $send=mail($mailAddress, $subject, $message, $headers);
   if($send){
     echo "<script>
             alert('Zpráva byla úspěšně odeslána.'); 
             window.location.href = '../index.php?page=contact#mail';
     </script>";
   } else{
     echo "<script>
             alert('Odeslání zprávy se nezdařilo.'); 
             window.history.go(-1);
     </script>";
   }
}else{
    echo "<script>
             alert('Zpráva nebyla odeslána jelikož nejsou vyplněna všechna povinná pole.'); 
             window.history.go(-1);
     </script>";
}
?>

</body>