<?php 
    namespace App\controllers;
    use App\models\Products;

    class Product {

        public function addProduct() {
            $data = json_decode(file_get_contents("php://input"), true);
            $sendProduct = Products::addProduct($data);
            return $sendProduct;
        }

        public function editProductById() {
            $data = json_decode(file_get_contents("php://input"), true);
            $sendUpdate = Products::editProductById($data);
            return $sendUpdate;
        }

        public function deleteProductById() {
            $data = json_decode(file_get_contents("php://input"), true);
            $delete = Products::deleteProductById($data);
            return $delete;
        }

        public function getProductsByCategory() {
            $Products = Products::getProductsByCategory();
            return $Products;
        }

    }