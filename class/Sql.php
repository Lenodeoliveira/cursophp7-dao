<?php

//classe Sql vai estender do  PDO que é uma classe nativa do sistema.
class Sql extends PDO {


     private $conn;

     //quando a classe for instanciada ela se  conectará automaticamente com o banco de dados.
     public function __construct(){

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

     }

     private function setParams($statement, $parameters = array()){

       foreach ($parameters as $key => $value) {
           	      
           	      $this->setParam($statement, $key, $value); 
           }    
    

     }

     private function setParam($statement, $key, $value){

            $statement->bindParam($key, $value);


     }

     public function query($rawQuery, $params = array()){

           $stmt = $this->conn->prepare($rawQuery);   
           
           $this->setParams($stmt, $params);

           $stmt->execute(); 

           return $stmt;  
     
     }

    public function select($rawQuery, $params = array()):array
    {

 
          $stmt = $this->query($rawQuery, $params);
          
          return $stmt->fetchAll(PDO::FETCH_ASSOC);



    }  


}



?>