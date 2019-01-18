<?php
class Table1
{
    private $conn;
    function __construct() {
        // session_start();
        $servername = "localhost";
        $dbname = "programare_web";
        $username = "root";
        $password = "";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
            $this->conn=$conn;  
        }
    }

    public function table1_list(){
        $sql = "SELECT * FROM table1 ORDER BY nr_crt asc ";
        $result=  $this->conn->query($sql);
        return $result;  
    }
    
    public function create_table1_info($post_data=array()){  
       if(isset($post_data['add_product'])){
         $produs= mysqli_real_escape_string($this->conn,trim($post_data['produs']));
         $bucati= mysqli_real_escape_string($this->conn,trim($post_data['bucati']));
         $pret_buc= mysqli_real_escape_string($this->conn,trim($post_data['pret_buc']));
         $pret_total= mysqli_real_escape_string($this->conn,trim($post_data['pret_total']));

         $sql="INSERT INTO table1 (produs, bucati, pret_buc, pret_total) VALUES ('$produs', '$bucati', '$pret_buc','$pret_total')";
         
         $result=  $this->conn->query($sql);
        
         if($result){
         
            $_SESSION['message']="Successfully Added Product Info";
            
            header('Location: tema1.php');
         }
          
         unset($post_data['add_product']);
       }
    }
    
    public function view_product_by_product_id($nr_crt){
       if(isset($nr_crt)){
         $product_id= mysqli_real_escape_string($this->conn,trim($nr_crt));
         
         $sql="Select * from students where student_id='$product_id'";
         
         $result=  $this->conn->query($sql);
      
         return $result->fetch_assoc(); 
       }  
    }
    
    
    public function update_product_info($post_data=array()){
        if(isset($post_data['update_product'])&& isset($post_data['nr_crt'])){
            $produs= mysqli_real_escape_string($this->conn,trim($post_data['produs']));
            $bucati= mysqli_real_escape_string($this->conn,trim($post_data['bucati']));
            $pret_buc= mysqli_real_escape_string($this->conn,trim($post_data['pret_buc']));
            $pret_total= mysqli_real_escape_string($this->conn,trim($post_data['pret_total']));
            $product_id= mysqli_real_escape_string($this->conn,trim($post_data['nr_crt']));

            $sql="UPDATE table1 SET produs='$produs',bucati='$bucati',pret_buc='$pret_buc',pret_total='$pret_total' WHERE nr_crt =$product_id";

            $result=  $this->conn->query($sql);
                
            if($result){
                $_SESSION['message']="Successfully Updated Product Informations. ";
            }
            unset($post_data['update_product']);
        }
    }
    
    public function delete_product_info_by_id($nr_crt){
        if(isset($nr_crt)) {
            $product_id= mysqli_real_escape_string($this->conn,trim($nr_crt));

            $sql="DELETE FROM  table1  WHERE nr_crt =$product_id";
            $result=  $this->conn->query($sql);

            if($result){
                $_SESSION['message']="Successfully Deleted the Product Info";
            }
        }
        header('Location: tema1.php'); 
    }

    function __destruct() {
      mysqli_close($this->conn);  
    }
    
}

?>