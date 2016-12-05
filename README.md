Signum TTE
===============================
***
## Package - Timezone
Timezone is test package. An all steps is followed step by steps which are mentioned on documentation

### Version
 Version reference we will use dev-master for now. 
### Before Installation
For this package and for leading other `Signum` package we should define repository information before installation. Inside application composer.json file we should declare repositories information.

**composer.json** Repository declaration example for both **git** and **svn**
```sh
    "repositories":[
    	{
    		"url": "https://github.com/alihuseyn/timezone.git",
    		"type": "git"
    	},
    	{
    		"url": "http://svn.signumtte.com/svn:8000/timezone",
    		"type": "svn"
    	}
    ],
```


### Installation
```sh
$ composer require signum/timezone dev-master 
```

### Configuration
##### Service Provider
Inside `config/app.php` edit service provider for `Timezone`
```sh
 'providers' => [
  ...
    Signum\Timezone\TimezoneServiceProvider::class,
  ..
 ]
```
After that autoload composer again
```sh
$ composer dump-autoload
```

##### Resource & Assets
Publish resources and assets
```sh 
$ php artisan vendor:publish --provider="Signum\Timezone\TimezoneServiceProvider"
```
## Documentation

For documentation please contact with SignumTTE

## Test Cases
For a test laravel project add package and then type
```sh
php artisan serve
```
##### Test Cases On Routes
***
| Cases For Controller | Case For Middleware |                               
|:---------------------|-----------------------:|
|*localhost:8000/timezone*| *localhost:8000/timezone?user=admin*|

Wish u best ;)

