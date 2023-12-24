<?php
class App{
    private $__controller, $__action, $__params;
    function __construct() {
        if(!empty($routes['default_controller'])){
            $this->__controller = $routes['default_controller'];
            $this->__action='index';
            $this->__params='';
            $this -> handleUrl();
        }

    }
    function getUrl()  {
        
    }
}