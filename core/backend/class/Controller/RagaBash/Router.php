<?php
namespace RagaBash\Controller\RagaBash;

/**
 * Class with the common routing.
 * This class uses a particular identation (not standard),
 *  but visually helpfull. '_' means directory separator.
 */
class Router
{
    public $root;
        public $core;
            public $backend;
                public $class;
                    public $model;
                    public $controller;
                public $config;
                public $executable;
            public $frontend;
                public $css;
                public $docummentation;
                public $javascript;
                public $template;
        public $temporary;
            public $calculation;
        public $vendor;
        
    public function construct()
    {
        $this->setRootPath();
            $this->core = "{$this->root}core/";
                $this->backend = "{$this->core}backend/";
                    $this->class = "{$this->backend}class/";
                        $this->model = "{$this->class}Model/";
                        $this->controller = "{$this->class}Controller/";
                    $this->config = "{$this->backend}config/";
                    $this->executable = "{$this->backend}executable/";
                $this->frontend = "{$this->core}frontend/";
                    $this->css = "{$this->frontend}css/";
                    $this->docummentation = "{$this->frontend}/docummentation/";
                    $this->javascript = "{$this->frontend}javascript/";
                    $this->template = "{$this->frontend}template/";
            $this->temporary = "{$this->root}temporary/";
                $this->calculation = "{$this->temporary}calculation/";
            $this->vendor = "{$this->root}vendor/";
        
    }
    
    public function setRootPath()
    {
        $filePath = dirname(__FILE__);
        
        $exploded = explode($filePath, "/");
        
        array_pop($exploded);   // Main
        array_pop($exploded);   // Model
        array_pop($exploded);   // Backend
        array_pop($exploded);   // Core
        array_pop($exploded);   // Ragabash
        
        $rootPath = implode("/", $exploded)."/";
        
        $this->root = $rootPath;
    }
    
}