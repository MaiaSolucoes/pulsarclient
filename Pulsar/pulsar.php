<?php

    class Pulsar {

        public static function login ($arguments = array()){
            if (empty($arguments['username']) or empty($arguments['password'])){
                return "vazio usuario e senha";
            }
            $url = "http://pul.cicero.maiasolucoes.com.br/auth/login?username=";
            $url .= "$arguments[username]&password=$arguments[password]";
/*            $response = get_headers($url);
            switch($response){
                case 'HTTP/1.0 500 Internal Server Error':
                    print('ERRO DE SERVIDOR');
                    break;

                default:
                    print "NUM TEM ERRO";
            } */
            $info = file_get_contents($url);
            $data = json_decode($info);
            $var = self::who($data->id);
            print_r($var);
        }

        public static function who($id){
            $url = "http://pul.cicero.maiasolucoes.com.br/user/user?id=$id";
            $data = file_get_contents($url);
            $json = json_decode($data);
            return $json;
        }

        public static function logout(){
            $url = file_get_contents("http://pul.cicero.maiasolucoes.com.br/auth/logout");
            $data = json_decode($url);
            return $url;
        }

    }