

<?php



class User {


    public static function find_this_query($ins_sql){
        global $con;
        // $result_set = mysqli_query($con, $sql);
        $run_sql = mysqli_query($con, $ins_sql);
  
  
            $the_object_array = array();

            // $row = mysqli_fetch_array( $result)
           
            // return $the_object_array;
                while($row = mysqli_fetch_array( $run_sql)){
               
                     $the_object_array[] = self::instantiation($row);

                            
                            }
                           
            
                return $the_object_array;
                
                
                }

public static function verify_user($username, $password){

  $username = escape_string($username);
  $password = escape_string($password);

  $sql = " SELECT * FROM users WHERE ";
  $sql .= " username = '$username' ";
  $sql .= " AND password = '$password' ";
 $sql .= " LIMIT 1 ";

 $result_get = self::find_this_query($sql);
var_dump($result_get);
 return !empty($result_get) ? array_shift($result_get) : false;


}
 




public static function instantiation ($the_record){
    $the_object = new self;
   //  $the_object->id        = $found_user['id'];
   //  $the_object->username  = $found_user['username'];
   //  $the_object->password  = $found_user['password'];
   //  $the_object->first_name= $found_user['first_name'];
   //  $the_object->last_name = $found_user['last_name'];
   //  $the_object->username  = $found_user['username'];
   
   
    foreach ($the_record as $the_attribute => $value) { 
        # code...
        if($the_object->has_the_attribute($the_attribute) ){
   
           $the_object->the_attribute = $value;
        }
    }
   
   
   return $the_object;
   
   }
   
   private function has_the_attribute ($the_attribute){
    $object_properties = get_object_vars($this);
    
     return array_key_exists($the_attribute,$object_properties );
    

   }
}








?>