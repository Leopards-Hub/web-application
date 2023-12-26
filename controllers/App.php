<?php
class App {
    private $__controller, $__action, $__params;

    public function __construct() {
        global $routes;
        if (!empty($routes['default_controller'])) {
            $this->__controller = $routes['default_controller'];
        }
        $this->__action = 'index';
        $this->__params = [];
        $this->handleUrl();
    }

    public function getUrl() {
        if (!empty($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        } else {
            $url = '/';
        }
        return $url;
    }

    public function handleUrl() {
        $url = $this->getUrl();
        $urlArr = array_filter(explode('/', $url));

        // Remove "controllers" from the array
        $urlArr = array_values(array_diff($urlArr, ['controllers']));
 
        // Handle controller
        if (!empty($urlArr[0])) {
            $this->__controller = $urlArr[0];
            if (file_exists("controllers/$this->__controller.php")) {
                require_once "controllers/$this->__controller.php";
                $this->__controller = new $this->__controller();
            } else {
                echo '404 Not Found'; // page 404
                return;
            }
    
            // Handle action
            if (!empty($urlArr[1])) {
                $this->__action = $urlArr[1];
            }
    
            // Handle params
            $this->__params = array_slice($urlArr, 2);
    
            // Dynamically invoke action
            if (method_exists($this->__controller, $this->__action)) {
                call_user_func_array([$this->__controller, $this->__action], $this->__params);
            } else {
                echo '404 Not Found'; // page 404
            }
        } else {
            // page default 
            global $routes;
            $this->__controller = $routes['default_controller'];
            
            require_once "controllers/$this->__controller.php";
            $this->__controller = new $this->__controller();
            $this->__controller->index();
        }
    }
    
}

