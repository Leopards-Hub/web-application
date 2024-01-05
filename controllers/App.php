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
    
        $routes = [
            '/' => 'homecontroller.php',
            '/home' => 'homecontroller.php',
            '/about' => 'aboutcontroller.php',
            '/menu' => 'menucontroller.php',
            '/booktable' => 'booktablecontroller.php',
            '/blog' => 'blogcontroller.php',
            '/shopping' => 'shoppingcartcontroller.php',
            '/order' => 'ordercontroller.php',
            '/contact' => 'contactcontroller.php',
            '/admin' => 'admincontroller.php',
            '/login' => 'logincontroller.php',
            '/logout' => 'logoutcontroller.php',
            '/register' => 'registercontroller.php',
            '/admin/order' => 'admin/ordercontroller.php',
            '/admin/table' => 'admin/tablecontroller.php',
            '/admin/booktable' => 'admin/booktablecontroller.php',
            '/admin/dish' => 'admin/dishcontroller.php',
            '/admin/orderdetail' => 'admin/orderdetailcontroller.php',
            '/admin/user' => 'admin/usercontroller.php',
        ];
    
        foreach ($routes as $route => $controllerFile) {
            if ($route == $url) {
                require_once 'controllers/' . $controllerFile;
                // $controllerClass =(str_replace('controller.php', '', basename($controllerFile))) . 'controller';
                // $controller = new $controllerClass();
                break;
            }
        }
    
    }}
    

        // // Remove "controllers" from the array
        // $urlArr = array_values(array_diff($urlArr, ['controllers']));
 
        // // Handle controller
        // if (!empty($urlArr[0])) {
        //     $this->__controller = $urlArr[0];
        //     if (file_exists('controllers/'.$this->__controller.'controller.php')) {
        
        //         require_once 'controllers/'.$this->__controller.'controller.php';
        //         // $this->__controller = new $this->__controller();
        //         // $this->__controller->index();
        //         var_dump( 'controllers/'.$this->__controller.'controller.php');

        //     } else {
        //         echo '404 Not Found'; // page 404
        //         return;
        //     }
        //      // Handle action parameter
        //      if (!empty($urlArr[1])) {
        //         $this->__action = $urlArr[1];
        //         unset($urlArr[1]);
        //         if ($this->__action == 'order') {
        //             $this->__controller = 'admin';
        //             $controllerFile = 'controllers/admin/' . $this->__action . 'controller.php';
            
        //             if (file_exists($controllerFile)) {
        //                  require_once $controllerFile;
                        
        //             } else {
        //                 echo '404 Not Found '; // Page not found
        //                 return;
        //             }
        //         }
        //     }
        //     // $controllerInstance = new $this->__controller();
        //     if (method_exists($this->__controller, $this->__action . 'action')) {
        //         call_user_func_array([$this->__controller, $this->__action . 'action'], $urlArr);
        //     } else {
        //         echo '404 Not Found'; // Action not found
        //     }
        // } else {
        //     // page default 
        //     global $routes;
        //     $this->__controller = $routes['default_controller'];
            
        //     require_once 'controllers/'.$this->__controller.'controller.php';
        //     // $this->__controller = new $this->__controller();
        //     // $this->__controller->index();
        // }
//     }
    
// }

