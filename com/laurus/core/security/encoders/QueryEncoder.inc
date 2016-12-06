<?php

/**
 * @todo Need to implement better and secure query encoder
 */
class QueryEncoder {

    public static function encodeString($value, $conn = null) {
        if ($conn) {
            if($conn instanceof CoreConnection){
               return mysqli_real_escape_string($conn->getConnection(),$value);
            }else{
               return mysqli_real_escape_string($conn,$value);
            }

        } else {
            return mysql_real_escape_string($value);
        }
    }

    public static function encodeInteger($value) {
        return $value;
    }

}

?>
