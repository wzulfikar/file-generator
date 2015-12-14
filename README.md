# File Generator
Generate file from template, based on laravel blade template [http://laravel.com/docs/5.1/blade]().

## Getting Started

- prepare your template file, use `.blade.php` as extension

	`$myViewTemplate = '/user/desktop/view.blade.php'`

- prepare array of variables that will be injected to the template

	`$vars = ['var1'=>'ha','var2'=>'hi'];`

- create new instance of FileGenerator

	`$fileGenerator = new FileGenerator($myViewTemplate, $vars)`
	
- Put rendered template file to output dir

	`$fileGenerator->put('/user/desktop/GeneratedFromTemplate.php')`