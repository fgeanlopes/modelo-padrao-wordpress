modelo-padrao-wordpress




<?php

$link_novo   = "http://localhost/dalben";
$email_admin = "gean@macfor.com.br";


$result1 = "UPDATE wp_options SET option_value = '$link_novo' WHERE option_name = 'home' OR option_name = 'siteurl'";
$resultMail = "UPDATE wp_options SET option_value = '$email_admin' WHERE option_name = 'admin_email'";

?>

<b>
	REALIZE UM UPDATE POR VEZ
	<br><br><br>
	-------------
	<br><br><br>
</b>


<br><br>
<?php echo $result1; ?>
<br><br>
-----------------------------

<br><br>
<?php echo $resultMail; ?>
<br><br>
-----------------------------
