<?php

namespace Wzulfikar\FileGenerator;

class FileGenerator{
	
	public $vars;
	public $template;

	public function __construct($template, array $vars = [])
	{
		if ( ! is_string($template) ) 
			throw new Exception('Type of $template should be string instead of ' . gettype($template));
		$this->template = $template;
		$this->setVars($vars);
	}
	
	public function setVars(array $vars){
		$this->vars = $vars;
	}
	
	public function exec(){
		return $this->replace_template_vars($this->template, $this->vars);
	}
	
	public function put($output){
		file_put_contents($output, $this->exec());
	}

	public function replace_template_vars($template, array $vars){
	    foreach ($vars as $var_name_to_replace => $new_var_name) {
	        $template = str_replace('{{' . $var_name_to_replace . '}}', $new_var_name, $template);
	    }
	    return $template;
	}
}