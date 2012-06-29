<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of request_handler
 *
 * @author root
 */
require 'user.php';

class request_handler {
    //put your code here

    private static function handle_get($object){

    }

    private static function handle_post($object) {

    }
    
    public static function processRequest()
    {
            // get our verb
            $request_method = strtolower($_SERVER['REQUEST_METHOD']);
            //$return_obj		= new RestRequest();
            // we'll store our data here
            $data			= array();

            switch ($request_method)
            {
                    // gets are easy...
                    case 'get':
                       $data = $_GET;
                        if(isset($data['data'])) {
                           handle_get(json_decode($data['data']));
                        }
                        break;
                    // so are posts
                    case 'post':
                            $data = $_POST;
                            $user = new user($data['user'], $data['pwd']);
                            $user->save();
                            break;
                    // here's the tricky bit...
                    case 'put':
                            // basically, we read a string from PHP's special input location,
                            // and then parse it out into an array via parse_str... per the PHP docs:
                            // Parses str  as if it were the query string passed via a URL and sets
                            // variables in the current scope.
                            parse_str(file_get_contents('php://input'), $put_vars);
                            $data = $put_vars;
                            break;
            }

            // store the method
           // $return_obj->setMethod($request_method);

            // set the raw data, so we can access it if needed (there may be
            // other pieces to your requests)
           // $return_obj->setRequestVars($data);

           // if(isset($data['data']))
            //{
                    // translate the JSON to an Object for use however you want
            //        $return_obj->setData(json_decode($data['data']));
          //  }
           // return $return_obj;

    }

}
?>
