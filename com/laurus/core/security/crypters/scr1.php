<?php
	include("Cipher.php");
?>

<?php
	include("key.php");
?>
<?php
	//script to add send an encrypted link
	
	$i=3;
	$v=urlencode(Cipher::encipher($MY_KEY[$i],"kunalmestri9@gmail.com"));
	echo "<a href='verify.php?prag1=". $v ."&ent=".$i."'>test</a>";
?>