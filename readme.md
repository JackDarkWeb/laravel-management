# BLaravel

**BLaravel** is Laravel but with a few boilerplate tweaks.  

#### based on [laravel/laravel 5.8.17](https://github.com/laravel/laravel/tree/v5.8.3) 

### usage
`composer create-project --prefer-dist blaravel/blaravel blog`

## Main differences

### 1.1.2
* Updated to laravel 5.8.17

### 1.1.1
* Removed `daemonite-material`.

### 1.1.0
* layout has title section. 

### 1.0.0
* User model is now in Models folder.
* HTTPS is forced (if available).
* Ships with `laravel-ide-helper` & `doctrine/dbal`.
* Helper file `helpers.php` added & loaded with composer.
* MySQL default engine is `InnoDB`.
* Laravel mix structure changed.
    * Complies mixes found in `resources/mixes/`.
    * Each mix has own `webpack.mix.js` file.
    * Set current mix via section variable in `package.json`.
* bootstrap replace with `daemonite-material`, (`bootstrap` swappable, check source files for info).
* Ships with `artisan make:auth` ran.  

### For Official laravel documentation go [here](https://laravel.com/docs) 

## License

BLaravel is based on Laravel and is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).