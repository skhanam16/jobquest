<?php

namespace Framework;

class Router{
    protected $routes = [];

    /**
     * Add a new route to this array
     */

    public function registerRoute($method, $uri, $controller){
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller
        ];

    }

    /**
     * Add a GET route
     * @param strong $uri
     * @param stirng $controller
     * @return void
     */

    public function get($uri, $controller){
        $this->registerRoute('GET', $uri, $controller);
    }

     /**
     * Add a POST route
     * @param strong $uri
     * @param stirng $controller
     * @return void
     */

    public function post($uri, $controller){
        $this->registerRoute('POST', $uri, $controller);

    }

     /**
     * Add a PUT route
     * @param strong $uri
     * @param stirng $controller
     * @return void
     */

    public function put($uri, $controller){
        $this->registerRoute('PUT', $uri, $controller);

    }

     /**
     * Add a DELETE route
     * @param strong $uri
     * @param stirng $controller
     * @return void
     */

    public function delete($uri, $controller){
        $this->registerRoute('DELETE', $uri, $controller);

    }

     /**
     * Route the request
     * @param strong $uri
     * @param stirng $method
     * @return void
     */

    public function route($uri, $method){
        foreach($this->routes as $route){
            if($route['uri'] ===$uri && $route['method'] === $method){
                require basePath('App/'.$route['controller']);
            }
           
        }

     
    }
}


