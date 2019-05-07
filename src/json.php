<?php
    /**
     * Created by PhpStorm.
     * User: julien
     * Date: 2019-04-18
     * Time: 16:40
     */
    
    namespace App;
    
    
    class json
    {
        public function randomEgg(){
            $response = new response();
            $eggs = $response->eggs();
            $count = count($eggs);
            header("Access-Control-Allow-Origin: *");
            header("HTTP/1.1 200 OK");
            header('Content-Type: application/json');
            $tenEggs=[];
            for ($i=0;$i<10;$i++) {
                $id = rand(1, $count);
                $tenEggs[]=$eggs[$id] ;
            }
            return json_encode($tenEggs);
        }
        public function randomChars(){
            $response = new response();
            $chars = $response->chars();
            $count = count($chars);
            $id = rand(1,$count);
            header("Access-Control-Allow-Origin: *");
            header("HTTP/1.1 200 OK");
            header('Content-Type: application/json');
            return json_encode($chars[$id]);
        }
        public function allChars(){
            $response = new response();
            $chars = $response->chars();
            header("Access-Control-Allow-Origin: *");
            header("HTTP/1.1 200 OK");
            header('Content-Type: application/json');
            return json_encode($chars);
        }
        public function allEggs(){
            $response = new response();
            $eggs = $response->eggs();
            header("Access-Control-Allow-Origin: *");
            header("HTTP/1.1 200 OK");
            header('Content-Type: application/json');
            return json_encode($eggs);
        
        }
    }