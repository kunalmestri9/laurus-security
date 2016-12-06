<?php
class Cipher
{
	public static function  encipher($mykey,$str)
	{
		$newstring;
		for($i=0;$i<strlen($str);$i++)
		{
			$ascii_val=ord(substr($str,$i,strlen($str)));
			$key_val=ord(substr($mykey,$i,strlen($mykey)));
			$new_val=$ascii_val+$key_val;
			if($new_val > 127)
			{
					$newstring .=chr(167);
					$new_val-=127;
			}
			 $newstring.=chr($new_val);
		}
	
		
		return $newstring;
	}
			
	
	public static function decipher($mykey,$str)
	{
		$newstring="";
		$isCited=false;
		$j=0;
		for($i=0;$i<strlen($str);$i++)
		{
			$ascii_val=ord(substr($str,$i,strlen($str)));
			if($ascii_val==167)
			{
				$isCited=true;
				
				continue;
			}
			if($isCited)
			{
				
				$ascii_val=$ascii_val+127;
				$isCited=false;	
			}
			
			$key_val=ord(substr($mykey,$j,strlen($mykey)));
			$new_val=$ascii_val-$key_val;
			$newstring.=chr($new_val);
			$j++;
		}

		return $newstring;
	}
}


/*
$EMAIL="sanmyluck@yahoo.com";
echo Cipher::encipher($MY_KEY[1],$EMAIL)."<br>"; 
echo Cipher::decipher($MY_KEY[1],Cipher::encipher($MY_KEY[1],$EMAIL));
*/
?>