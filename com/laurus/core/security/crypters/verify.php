<?php
	include("Cipher.php");
?>

<?php
	include("key.php");
?>
<?php
	//script to add send an encrypted link
	
	
	$v=Cipher::decipher($MY_KEY[$_REQUEST['ent']],$_REQUEST['prag1']);
	echo $v;
?>