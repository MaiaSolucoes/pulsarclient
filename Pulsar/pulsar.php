<?php

    class Pulsar {

        public static function login ($arguments = array()){
            if (empty($arguments['username']) or empty($arguments['password'])){
                return "Usuario ou senha em branco";
            }
            $url = "http://pul.cicero.maiasolucoes.com.br/auth/login?username=";
            $url .= "$arguments[username]&password=$arguments[password]";
            $status = self::status($url);
            switch($status){
                case "200":
                    $content = file_get_contents($url);
                    $data = json_decode($content);
                    break;
                case "404":
                    $data = "Not found";
                    break;
                default:
                    $data = "Error";
            }
            return $data;
        }

        public static function who($id){
            $url = "http://pul.cicero.maiasolucoes.com.br/user/user?id=$id";
            $content = file_get_contents($url);
            $data = json_decode($content);
            return $data;
        }

        public static function logout(){
            $content = file_get_contents("http://pul.cicero.maiasolucoes.com.br/auth/logout");
            $data = json_decode($content);
            return $content;
        }

        public static function status($url) {
            // RETURN HTTP STATUS CODE
            $headers = get_headers($url);
            return substr($headers[0], 9, 3);
        }
    }