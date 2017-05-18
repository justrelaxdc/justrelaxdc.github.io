<?php 
$result = mail("jusrelaxdc@gmail.com", "rossomakha20000@gmail.com", $message, 
     "From: webmaster@ example.com \r\n" 
    ."X-Mailer: PHP/" . phpversion()); 
?> 

if ($result) {
echo "<p>Сообщение отправлено успешно!</p>";
}
else {
echo "<p>Сообщение не отправлено</p>";
}
?>
