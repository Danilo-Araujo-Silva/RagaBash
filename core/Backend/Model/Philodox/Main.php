<?php
namespace Garoudan\Philodox;

use Garoudan\Philodox\Router;

class Main
{
    private $executable;
    
    private $className;
    
    public function construct()
    {
        $this->className = get_class($this);
        $router = new Router;
        $this->configure();
    }
    
    public function configure()
    {
        if(empty($this->executable)) {
            $this->setConfig();
        }
        
        $this->test();
        
        return true;
    }
    
    public function run($call="")
    {
        try{
            
        } catch (Exception $exception) {
            
        }
    }
    
    public function setConfig()
    {
        
    }
    
    public function test()
    {
        return true;
    }
}