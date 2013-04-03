<?php
namespace Garoudan\RagaBash\Core\Backend\Model\Main;

use Garoudan\RagaBash\Core\Backend\Model\Main\Router;

class Main
{
    private $className;
    private $config;
    private $errors;
    private $executable;
    private $informations;
    private $router;
    private $warnings;
    
    public function construct()
    {
        $this->className = get_class($this);
        $this->router = new Router;
        $this->configure();
    }
    
    public function configure()
    {
        if (empty($this->executable)) {
            $this->setConfig();
        }
        
        $this->test();
        
        return true;
    }
    
    public function getConfig()
    {
        try {
            $configPath = "{$this->router->config}{$this->className}/Config.json";
            $content = file_get_contents($configPath);
            $this->config = json_decode($content);
            
            return true;
        } catch (Exception $exception) {
            
        }
    }
    
    public function isReadableAndExecutable()
    {
        if (
            is_readable($this->executable) &&
            is_executable($this->executable)
        ) {
            return true;
        } else {
            return false;
        }
    }
    
    public function isValidConfig()
    {
        if (
            empty($this->config->Executable) ||
            empty($this->config->Result) ||
            empty($this->config->Test->Call) ||
            empty($this->config->Test->Result)
        ) {
            return false;
        }
    }
    
    public function run($call="")
    {
        try{
            if (!$this->isReadableAndExecutable()) {
                $message = "The file '{$this->executable}' should be readable and executable. Please give to it at least the '555' permission.";
                throw new \Exception($message);
                $this->erros[] = $message;
            }
            
            $completeCall = "{$this->executable} '$call'";
            shell_exec($completeCall);
            
            if (!file_exists($this->config->Result)) {
                $message = "Was not possible perform this calculation. The result file was not created.";
                throw new \Exception($message);
                $this->erros[] = $message;
            } else {
                if (filesize($this->config->Result) == 0) {
                    $message = "Was not possible perform this calculation. The result file is empty.";
                    throw new \Exception($message);
                    $this->erros[] = $message;
                }
            }
            
        } catch (Exception $exception) {
            
        }
    }
    
    public function setConfig()
    {
        $this->getConfig();
        $this->executable = $this->router.$this->config->Executable;
        
        return true;
    }
    
    public function test()
    {
        $result = $this->run($this->config->Test->Call);
        $answer = $this->config->Test->Answer;
        
        if ($result === $answer) {
            return true;
        } else {
            return false;
        }
    }
}