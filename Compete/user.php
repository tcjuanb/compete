<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users_model
 *
 * @author tcjuan
 */
class user {
    //put your code here
    private $user_name;
    private $h_password;

    public function  __construct($user, $pwd) {
        $this->user_name = $user;
        $this->h_password = md5($pwd);
    }

    // return bool: whether authentication is successful.
    public function authenticate() {
        // connect to mysql
    }

    public function find_user_by_name($user) {
        // connect to mysql
    }

    public function save() {
        // insert to mysql
       mysql_query("INSERT INTO users (user_name, password)
            VALUES ('$this->user_name', '$this->h_password')");
    }
}
?>
