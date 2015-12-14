# File Generator
Generate file from template, using laravel blade as template engine. See: [http://laravel.com/docs/5.1/blade]().

## Getting Started

- prepare your template file, use `.blade.php` as extension

	`$myViewTemplate = '/user/desktop/view.blade.php'`

- prepare array of variables that will be injected to the template

	`$vars = ['var1'=>'ha','var2'=>'hi'];`

- create new instance of FileGenerator

	`$fileGenerator = new FileGenerator($myViewTemplate, $vars)`
	
- Put rendered template file to output dir

	`$fileGenerator->put('/user/desktop/GeneratedFromTemplate.php')`
	
## Testing

- use `phpunit` in curent directory to execute test. 

The test will use `views/Model.blade.php` as template, inject `$vars`, store generated file as `GeneratedFromTemplate.php` and delete that generated file upon test completion.

