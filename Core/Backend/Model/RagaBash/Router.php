<?php
namespace Garoudan\Philodox;

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
                public $config;
                public $controller;
                public $executable;
                public $model;
                    public $mathematica;
                    public $ragabash;                    
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
                    $this->executable = "{$this->backend}Executable/";
                    $this->model = "{$this->backend}Model/";
                        $this->mathematica = "{$this->model}Mathematica/";
                        $this->ragabash = "{$this->model}Philodox/";
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
        
        array_pop($exploded);   // Main
        array_pop($exploded);   // Model
        array_pop($exploded);   // Backend
        array_pop($exploded);   // Core
        array_pop($exploded);   // Ragabash
        
        $rootPath = implode("/", $exploded)."/";
        
        $this->root = $rootPath;
    }
    
}