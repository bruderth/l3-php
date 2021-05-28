<?php


class Router
{

    function process()
    {
        $file = 'routes.json';
        $data = file_get_contents($file);
        $data = json_decode($data, true);

        $uri = $_SERVER['REQUEST_URI'];
        $uri = str_replace('/tp4/index.php', '', $uri);

        $ok = false;

        foreach ($data as $value){
            if ($value['path'] == $uri){
                $ok = true;
                $controller = $value['controller'];
                $controller = explode('@', $controller);
            }
        }
        if($ok == false){
            return http_response_code(404);
        }

        $object = "\App\Controller\\" . $controller[à];
        $object = new object();
        $fonction = $controller[1];
        return $object->$fonction();



        /**
         * ex http://localhost/
         *
         * $uri = /
         */

        /**
         * ex http://localhost/catalog
         *
         * $uri = /catalog
         */

        /**
         * ex http://localhost/catalog/product
         *
         * $uri = /catalog/product
         */
        $uri = "";

        /**
         * mapping entre $uri et routes.json
         * Prevoir route non connue => 404
         */



        /**
         * instance controller de la route appel de la methode
         */

    }

}