<?php 
    namespace App\controllers;
    use App\models\Categories;

    class Category {
        

        public function addCategory() {
            $data = json_decode(file_get_contents("php://input"), true);
            $sendCategory = Categories::addCategory($data);
            return $sendCategory;
        }

        public function editCategoryById() {
            $data = json_decode(file_get_contents("php://input"), true);
            $sendUpdate = Categories::editCategoryById($data);
            return $sendUpdate;
        }

    }