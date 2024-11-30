<?php 

namespace App\Core;

final class Router
{
    private const CONTROLLER_NAMESPACE = 'App\Controllers\\';
    
    private string $name_method = 'index';
    private string $name_controller = 'main';
    private array $request_uri = [];
    private array $config = [];

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->processRequest();
        $this->setControllerName();
        $this->setMethodName();
    }

    public function run(): void
    {
        $this->validate();
        $namespace = $this->getNamespace();
        $controller_obj = new $namespace;
        call_user_func([$controller_obj, $this->name_method]);
    }

    private function validate(): void
    {
        $key = $this->getConfigKey();

        if ($this->isAdminRequest()) {
            if (empty($this->request_uri[3]) || !isset($this->config[$key])) {
                $this->setErrorController();
            } else {
                $this->setAdminController();
            }
        } else {
            if (!isset($this->config[$key])) {
                $this->setErrorController();
            } else {
                $this->setNormalController();
            }
        }
    }

    private function getNamespace(): string
    {
        return self::CONTROLLER_NAMESPACE . ucfirst($this->name_controller);
    }

    private function setControllerName(): void
    {
        if ($this->isAdminRequest()) {
            $this->name_controller = $this->request_uri[3] ?? 'Error';
        } else {
            $this->name_controller = $this->request_uri[2] ?? 'main';
        }
    }

    private function setMethodName(): void
    {
        if ($this->isAdminRequest()) {
            $this->name_method = $this->request_uri[4] ?? 'view_admin';
        } else {
            $this->name_method = $this->request_uri[3] ?? 'view';
        }
    }

    private function processRequest(): void
    {
        $this->request_uri = isset($_SERVER['REQUEST_URI']) ? array_filter(explode('/', $_SERVER['REQUEST_URI'])) : [];
    }

    private function isAdminRequest(): bool
    {
        return isset($this->request_uri[2]) && $this->request_uri[2] === 'admin';
    }

    private function setErrorController(): void
    {
        $this->name_controller = 'Error';
        $this->name_method = 'index';
    }

    private function setAdminController(): void
    {
        $key = 'admin/' . $this->name_controller;
        $config_array = $this->config[$key] ? explode('/', $this->config[$key]) : [];
        $this->name_controller = isset($config_array[1]) ? "Admin\\" . $config_array[1] : 'Error';
        $this->name_method = $config_array[2] ?? 'index';
    }

    private function setNormalController(): void
    {
        $key = $this->getConfigKey();
        $config_array = $this->config[$key] ? explode('/', $this->config[$key]) : [];
        $this->name_controller = $config_array[0] ?? 'Error';
        $this->name_method = $config_array[1] ?? 'index';
    }

    private function getConfigKey(): string
    {
        return $this->isAdminRequest()
            ? 'admin/' . $this->name_controller
            : $this->name_controller . '/' . $this->name_method;
    }
}
