<?php

namespace BelajarPHPMVC\App;

class Router
{

    private static array $routes = [];

    public static function add(string $method,
                               string $path,
                               string $controller,
                               string $function,
                               array $middlewares = []): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
            'middlewares' => $middlewares
        ];
    }

    public static function run(): void
    {
        $path = '/';

        if(isset($_SERVER['PATH_INFO'])){
            $path = $_SERVER['PATH_INFO'];
        }
        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route){
            //Mmebuat pattern regex nya
            $pattern = "#^" . $route['path'] . "$#";
            if(preg_match($pattern, $path, $variables) && $method == $route['method']){
                //Memanggil middleware
                foreach ($route['middlewares'] as $middleware){
                    $instance = new $middleware;
                    $instance->before();
                }


                //Membuat object dari array controller dan menyimpan nama functionnya

                $controller = new $route['controller']; //Mengambil string controller dan membuat object dari situ
                $function = $route['function']; //Mengambil function dari string function
                //$controller->$function();

                //Buang nilai pertama
                array_shift($variables);
                //Untuk mengirim variable yang didapat bisa pake dibawah ini
                call_user_func_array([$controller, $function], $variables);
                return;
            }
        }

        http_response_code(404);
        echo "Controller not found";
    }

}