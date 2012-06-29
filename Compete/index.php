<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //phpinfo();
        require 'request_handler.php';
        require 'database_utils.php';

        echo md5('abc123');
        echo '<br />';

        error_reporting(E_ALL);
        ini_set('display_errors', '1');
         $database_utils = new database_utils();
         $database_utils->set_up();
         $request_handler = new request_handler();
         $request_handler->processRequest();

         $result = mysql_query("SELECT * FROM users");

         while($row = mysql_fetch_array($result))
         {
           echo $row['user_name'] . " ^^ " . $row['password'];
           echo "<br />";
         }
         $database_utils->destruct();
        ?>
    </body>
</html>
