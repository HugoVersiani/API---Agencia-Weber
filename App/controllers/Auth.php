<?php 
    namespace App\controllers;
    use App\models\Users;

    class Auth {
        public function login(){
            $data = json_decode(file_get_contents("php://input"), true);
            if($data['email'] == 'teste@gmail.com' && $data['password'] == '123') {
           
                $key = '123456';

                $header = [
                    'typ' => 'JWT',
                    'alg' => 'HS256'
                ];

                $payload = [
                    
                    'name' => 'Nome do usuário',
                    'email' => 'email@email.com',
                ];

                $header = json_encode($header);
                $payload = json_encode($payload);

                $header = base64_encode($header);
                $payload = base64_encode($payload);

                $sign = hash_hmac('sha256', $header . "." . $payload, $key, true);
                $sign = base64_encode($sign);

                $token = $header . '.' . $payload . '.' . $sign;

                return $token;
            } 
            throw new \Exception('Usuário não autenticado');
        }
    }