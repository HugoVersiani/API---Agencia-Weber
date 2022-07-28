<?php 
    namespace App\models;
    class Categories {
        private static $table = 'category';

        public static function addCategory($data){
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
            $sql = 'INSERT INTO ' .self::$table.' (name, description) VALUE (:na, :de)';
            $stmt = $connPdo->prepare($sql);
            $stmt->bindvalue(':na', $data['name']);
            $stmt->bindvalue(':de', $data['description']);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {  
                return "Categoria adicionada com sucesso!";
            } else {
                throw new \Exception("Não foi possivel adicionar a categoria.");
            }
  
        }

        public static function editCategoryById($data){
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
            $sql = 'UPDATE ' .self::$table.' SET name = :na, description = :de WHERE id = :id';
            $stmt = $connPdo->prepare($sql);
            $stmt->bindvalue(':id', $data['id']);
            $stmt->bindvalue(':na', $data['name']);
            $stmt->bindvalue(':de', $data['description']);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {  
                return "Categoria editada com sucesso!";
            } else {
                throw new \Exception("Não foi possivel editar a categoria.");
            }
  
        }

    }