<?php

namespace Wzulfikar\Tests;

use Wzulfikar\FileGenerator\FileGenerator;

class ExampleTest extends \PHPUnit_Framework_TestCase
{
	public function testCreateFileFromModelTemplate()
	  {	

        $view   = __DIR__ . '/../views/Model';
        $output = __DIR__ . '/../GeneratedFromTemplate.php';
        
        echo "Content of sample template:\n\n";
        echo "\n\n";

        $vars = [
        	'namespace' => 'App\Polymorphic\Likeable',
        	'modelName' => 'Like',
        	'polymorphicName' => 'Likeable'
        ];

        echo "Replacement of template variables:\n\n";
		var_dump($vars);
        echo "\n\n";

        (new FileGenerator($view, $vars))->put($output);

        $contentOutput = file_get_contents($output);

        // make sure that file is generated
        $this->assertFileExists($output);

        echo "Content of file generated from template:\n\n";
        var_dump($contentOutput);

        // make sure that generated file contains new variables
        foreach ($vars as $replaced_var => $new_var) {
	        $this->assertContains($new_var, $contentOutput, 'message', false);
        }

        // delete file generated from this test
  		unlink($output);
	  }
}
