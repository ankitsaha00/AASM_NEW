<?php
require_once("userInformation.php");
// ................... Main Class ......................
class Main_Class extends UserInfo 
{
	var $conn;
	public function __construct()
   {
    $this->conn= new mysqli(HOST,USERNAME,PASSWORD,DATABASE);
    if(! $this->conn)
    {    
      die("Database Not Found"); 
    }
    else
    {
       session_start();
    }
  }

    public function insert($data){

       return $this->conn->query($data);
    }

    public function total_row($sql)
    {
      $query= $this->conn->query($sql);
      if($query->num_rows >0)
      {  
        return $query->num_rows; 
      }
      else
       {
          return false;
       }

    }
    public function fetch_data($sql){
       $query= $this->conn->query($sql);
        if($query->num_rows>0)
        {    
            $data = array(); 
            while($result = $query->fetch_array(MYSQLI_ASSOC))
             {
                $data[] = $result;
             }
          return $data;    
        }
        else{
            return false;
        }   

    }

    public function single_row_fetch($sql){
       $query= $this->conn->query($sql);
        if($query->num_rows>0)
        {    
        
            while($result = $query->fetch_array(MYSQLI_ASSOC))
             {
               return $result; 
             }
             
        }
        else{
            return false;
        }   

    }
    public function session_access()
    {
      if(isset($_SESSION['admin_id']) && !empty($_SESSION['admin_Name']))
      {
         echo "<script>window.location='../..Admin/Dashboard/index.php'</script>";
      }
    }
    public function session_private()
    {
        if( empty($_SESSION['admin_id'] && $_SESSION['admin_Name']))
      {
         echo "<script>window.location='../../Admin/index.php'</script>";
      }
    }
// Exit Class
}

?>