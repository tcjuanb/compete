<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database_utils
 *
 * @author root
 */
class database_utils {
    //put your code here
    public static $con;
    
    static function set_up() {
     self::$con = mysql_connect("localhost","root","");
     if (!self::$con)
        {
          die('Could not connect: ' . mysql_error());
        }
    mysql_select_db("chat_db", self::$con);
    }

    static function destruct() {
       mysql_close(self::$con);
    }
}
?>
