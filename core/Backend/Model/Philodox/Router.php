<?php
namespace Garoudan\Philodox;

/**
 * Class with the common routing.
 * This class uses a particular identation (not standart),
 *  but visually helpfull.
 */
class Router
{
    public $root;
        public $core;
            public $backend;
                public $config;
                public $controller;
                public $model;
                    public $mathematica;
                    public $philodox;                    
                public $view;
            public $frontend;
                public $css;
                public $docummentation;
                public $javascript;
                public $template;
        public $temp;
        
    public function construct()
    {
        $this->setRootPath();
            $this->core = "{$this->root}core/";
                $this->backend = "{$this->core}Backend/";
                    $this->config = "{$this->backend}Config/";
                    $this->controller = "{$this->backend}Controller/";
                    $this->model = "{$this->backend}Model/";
                        $this->mathematica = "{$this->model}Mathematica/";
                        $this->philodox = "{$this->model}Philodox/";
                    $this->view = "{$this->backend}View/";
                $this->frontend = "{$this->core}Frontend/";
                    $this->css = "{$this->frontend}CSS/";
                    $this->docummentation = "{$this->frontend}/Docummentation";
                    $this->javascript = "{$this->frontend}Javascript/";
                    $this->template = "{$this->frontend}Template/";
            $this->temp = "{$this->root}Temp/";
        
    }
    
    public function setRootPath()
    {
        $filePath = dirname(__FILE__);
        
        $exploded = explode($filePath, "/");
        
        array_pop($exploded);   // Philodox
        array_pop($exploded);   // Model
        array_pop($exploded);   // Backend
        array_pop($exploded);   // core
        array_pop($exploded);   // Philodox
        
        $rootPath = implode("/", $exploded)."/";
        
        $this->root = $rootPath;
    }
    
}