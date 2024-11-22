<?php 

namespace App\Core;

final class Router 
{

    const CONTROLLER_NAMESPACE = 'App\Controllers\\';
    private string $name_method = '';
    private string $name_controller = '';
    private array $request_uri = [];
    private array $config = [];

    public function __construct($config)
    {
        $this->config = $config;
        $this->procces_request();
        $this->set_controller_name();
        $this->set_method_name();
    }

    public function run() 
    {
        $this->validate();
        $namespace = $this->get_name_space();

        $controller_obj = new $namespace;

        call_user_func([$controller_obj, $this->name_method]);
    }

    private function validate(): void
    {
        if (!isset($this->config[$this->name_controller . '/' . $this->name_method])) 
        {
            $this->name_controller = 'Error';
            $this->name_method = 'index';
        } else {
            $config_array = explode('/' , $this->config[$this->name_controller . '/' . $this->name_method]);
            $name_controller = $config_array[0];
            $name_method = $config_array[1];
        }
    }

    private function get_name_space(): string 
    {
        return self::CONTROLLER_NAMESPACE . ucfirst($this->name_controller);
        
    }

    private function set_controller_name(): void
    {
        $this->name_controller = !empty($this->request_uri[2]) ? $this->request_uri[2] : 'main';
    }

    private function set_method_name(): void 
    {
       $this->name_method = !empty($this->request_uri[3]) ? $this->request_uri[3] : 'index'; 
    }

    private function procces_request(): void
    {
        $this->request_uri = isset($_SERVER['REQUEST_URI']) ? explode('/', $_SERVER['REQUEST_URI']) : [];
    }

}
