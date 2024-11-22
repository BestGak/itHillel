<?php 

namespace App\Core;

class Router 
{
    const CONTROLLER_NAMESPACE = 'App\Controllers\\';

    public function run() 
    {
        $namespace = $this->get_name_space();

        if (!class_exists($namespace)) {
            $namespace = self::CONTROLLER_NAMESPACE . 'Error';
        }

        $controller = new $namespace;

        $method = $this->get_method_name();

        if (method_exists($controller, $method)) {
            call_user_func([$controller, $method]);
        } else {
            if (method_exists($controller, 'notFound')) {
                call_user_func([$controller, 'notFound']);
            } else {
                echo "Error: Method '$method' not found in controller.";
            }
        }
    }

    private function get_name_space(): string 
    {
        $controller_name = $this->prepare_controller_name();

        return self::CONTROLLER_NAMESPACE . ucfirst($controller_name);
    }

    private function prepare_controller_name()
    {
        $result = isset($_SERVER['REQUEST_URI']) ? explode('/', $_SERVER['REQUEST_URI']) : 'Main';
        $result = is_array($result) && !empty($result[1]) ? $result[1] : 'Main';

        return $result;
    }

    private function get_method_name(): string 
    {
        $result = isset($_SERVER['REQUEST_URI']) ? explode('/', $_SERVER['REQUEST_URI']) : [];
        $method = is_array($result) && !empty($result[2]) ? $result[2] : 'index'; 

        return $method;
    }
}
