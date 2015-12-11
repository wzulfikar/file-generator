<?php

namespace Wzulfikar\Tests;

use Wzulfikar\FileGenerator\FileGenerator;

class ExampleTest extends \PHPUnit_Framework_TestCase
{
		public function testCreateFileFromSampleTemplate()
	  {	
	  		$input = __DIR__ . '/../SampleTemplate.php';
        $output = __DIR__ . '/../GeneratedFromTemplate.php';

	  		$template = file_get_contents($input);
        
        echo "Content of sample template:\n\n";
        var_dump($template);
        echo "\n\n";

        $vars = [
        	'namespace' => 'App\Polymorphic\Likeable',
        	'modelName' => 'Like',
        	'polymorphicName' => 'Likeable'
        ];

        echo "Replacement of template variables:\n\n";
				var_dump($vars);
        echo "\n\n";

        $fileGenerator = new FileGenerator($template, $vars);
        $fileGenerator->put($output);

        $contentOutput = file_get_contents($output);
        echo "Content of file generated from template:\n\n";
				var_dump($contentOutput);

        // make sure that file is generated
        $this->assertFileExists($output);

        // make sure that generated file contains new variables
        foreach ($vars as $replaced_var => $new_var) {
	        $this->assertContains($new_var, $contentOutput, 'message', false);
        }

        // delete file generated from this test
  			unlink($output);
	  }
}
