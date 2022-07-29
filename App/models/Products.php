<?php 
    namespace App\models;
    class Products {
        private static $table = 'product';

        public static function addProduct($data){
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
            $sql = 'INSERT INTO ' .self::$table.' (name, price, image, category_id) VALUE (:na, :pr, :im, :ci)';
            $stmt = $connPdo->prepare($sql);
            $stmt->bindvalue(':na', $data['name']);
            $stmt->bindvalue(':pr', $data['price']);
            $stmt->bindvalue(':im', $data['image']);
            $stmt->bindvalue(':ci', $data['category_id']);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {  
                return "Produto adicionado com sucesso!";
            } else {
                throw new \Exception("Não foi possivel adicionar o produto.");
            }
  
        }

        public static function editProductById($data){
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
            $sql = 'UPDATE ' .self::$table.' SET name = :na, price = :pr, image = :im, category_id = :ci, status = :st WHERE id = :id';
            $stmt = $connPdo->prepare($sql);
            $stmt->bindvalue(':id', $data['id']);
            $stmt->bindvalue(':na', $data['name']);
            $stmt->bindvalue(':pr', $data['price']);
            $stmt->bindvalue(':im', $data['image']);
            $stmt->bindvalue(':ci', $data['category_id']);
            $stmt->bindvalue(':st', $data['status']);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {  
                return "Produto editado com sucesso!";
            } else {
                throw new \Exception("Não foi possivel editar o produto.");
            }
  
        }

        public static function deleteProductById($data){
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
            $sql = 'DELETE FROM ' .self::$table.' WHERE id = :id';
            $stmt = $connPdo->prepare($sql);
            $stmt->bindvalue(':id', $data['id']);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {  
                return "Produto excluido com sucesso!";
            } else {
                throw new \Exception("Não foi possivel excluir o produto.");
            }
  
        }

        public static function getProductsByCategory() {
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
            $sql = 'SELECT product.name, product.price, product.image, category.name as category FROM category
                    INNER JOIN product ON
                    product.category_id = category.id';
            $stmt = $connPdo->prepare($sql);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {  
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            } else {
                throw new \Exception("Não foi possivel encontrar os produtos");
            }
        }



    }