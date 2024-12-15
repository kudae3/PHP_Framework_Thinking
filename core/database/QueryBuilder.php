<?php

    class QueryBuilder{

        public $pdo;
            
        function __construct($pdo){
            $this->pdo = $pdo;
        }

        public function all($table){
            
            try{
                
                $statement = $this->pdo->prepare("select * from $table"); 
                $statement->execute();
                return $statement->fetchAll(PDO::FETCH_OBJ);
            
            }catch(PDOException $e){
                echo $e->getMessage();
            } 
        }

    }

?>
