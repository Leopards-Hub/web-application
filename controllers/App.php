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
            '/thankyou' => 'thankyoucontroller.php',
            '/contact' => 'contactcontroller.php',
            '/login' => 'logincontroller.php',
            '/logout' => 'logoutcontroller.php',
            '/register' => 'registercontroller.php',
        ];
        if(isset($_SESSION['user'])&& $_SESSION['user']['role']=='admin'){
            $routes = [
            '/' => 'homecontroller.php',
            '/home' => 'homecontroller.php',
            '/about' => 'aboutcontroller.php',
            '/menu' => 'menucontroller.php',
            '/booktable' => 'booktablecontroller.php',
            '/blog' => 'blogcontroller.php',
            '/shopping' => 'shoppingcartcontroller.php',
            '/order' => 'ordercontroller.php',
            '/thankyou' => 'thankyoucontroller.php',
            '/contact' => 'contactcontroller.php',
            '/login' => 'logincontroller.php',
            '/logout' => 'logoutcontroller.php',
            '/register' => 'registercontroller.php',
            '/admin' => 'admincontroller.php',
            '/admin/order' => 'admin/ordercontroller.php',
            '/admin/table' => 'admin/tablecontroller.php',
            '/admin/booktable' => 'admin/booktablecontroller.php',
            '/admin/dish' => 'admin/dishcontroller.php',
            '/admin/orderdetail' => 'admin/orderdetailcontroller.php',
            '/admin/user' => 'admin/usercontroller.php',
            '/admin/bookings' => 'admin/bookingscontroller.php',];       
         }
    
        foreach ($routes as $route => $controllerFile) {
            if ($route == $url) {
                require_once 'controllers/' . $controllerFile;
                break;
            }
        }
    }}
    

