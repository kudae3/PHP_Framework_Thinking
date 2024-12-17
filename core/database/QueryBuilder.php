<?php

    class QueryBuilder{

        public $pdo;
            
        function __construct($pdo){
            $this->pdo = $pdo;
        }

        public function all(String $table){
            
            try{
                
                $statement = $this->pdo->prepare("select * from $table"); 
                $statement->execute();
                return $statement->fetchAll(PDO::FETCH_OBJ);
            
            }catch(PDOException $e){
                echo $e->getMessage();
            } 
        }

        public function create(Array $data, String $table){
            try{

                $columns = implode(",", array_keys($data));
                
                $placeholders = implode(",", array_map(function($d){
                    return ":$d";
                }, array_keys($data)));

                $statement = $this->pdo->prepare("insert into $table ($columns) values($placeholders)");
                $statement->execute($data);               

            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }

    }

?>
