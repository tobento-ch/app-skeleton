# App Skeleton

Use this app skeleton to quickly setup and start working on a new [**App**](https://github.com/tobento-ch/app) project.

## Table of Contents

- [Getting Started](#getting-started)
	- [Requirements](#requirements)
- [Documentation](#documentation)
    - [App](#app)
        - [Directory Structure](#directory-structure)
        - [Config](#config)
        - [Src](#src)
        - [Register Boots](#register-boots)
    - [App Testing](#app-testing)
    - [App Bundles](#app-bundles)
- [Credits](#credits)
___

# Getting Started

Add the latest version of the app skeleton running this command.

```
composer create-project tobento/app-skeleton [my-app-name]
```

## Requirements

- PHP 8.0 or greater

# Documentation

## App

Check out the [**App**](https://github.com/tobento-ch/app) to learn more about the app in general.

### Directory Structure

The directories are set on the app.php file. You can freely change them as you prefer.

```
app/app.php
```

Check out the [**App Directories**](https://github.com/tobento-ch/app#app-directories) to learn more about directories in general.

### Config

Some [App Bundles](#app-bundles) have config files, which will be located as default at:

```
app/config/
```

### Src

The ```app/src/``` directory is the place to put your classes which is namespaced under ```App```.

### Register Boots

You may register boots on two places.

**On the app.php config file**

```
app/config/app.php
```

```php
return [
    
    /*
    |--------------------------------------------------------------------------
    | Application Boots
    |--------------------------------------------------------------------------
    |
    | The application boots.
    |
    */
        
    'boots' => [
        \Tobento\App\Boot\ErrorHandling::class,
        
        // add more boots.
        AnyBoot::class,
    ],
    
];
```

**On the app.php file**

```
app/app.php
```

```php
// Boot the app -----------------------------------------------------------
$app->boot(\Tobento\App\Boot\App::class);

// Add more boots here
$app->boot(AnyBoot::class);
```

## App Testing

**Unit Tests**

Unit tests are designed to test small, isolated portions of code, often focusing on a single method.

See demo test file: ```tests/Unit/DemoTest.php```

**Feature Tests**

Feature tests test the behavior of a complete application. They may make HTTP requests and test that the response is as expected.

See demo test file: ```tests/Feature/DemoTest.php```

Furthermore, check out the [App Testing](https://github.com/tobento-ch/app-testing) bundle for more information.

## App Bundles

[List Of Available App Bundles](https://github.com/tobento-ch?tab=repositories&q=app)

# Credits

- [Tobias Strub](https://www.tobento.ch)
- [All Contributors](../../contributors)