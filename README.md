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
    - [App Bundles](#app-bundles)
        - [Coming Soon](#coming-soon)
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

Some [App Bundles](#app-bundles) have config file, which will be located as default at:

```
app/config/
```

### Src

Some [App Bundles](#app-bundles) have will install php files for customization at:

```
app/src/
```

Or you might put your own files there.

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

## App Bundles

### Coming soon

* [Database](#app-database) - Database support.
* [Debugbar](#app-debugbar) - Debug routes, middlewares and much more.
* [Http](#app-http) - Http, routing, middleware and session support.
* [Migration](#app-migration) - Migration support.
* [Localization](#app-localization) - Languages and translation support.
* [Resource](#app-resource) - Resources support.
* [Shop](#app-shop) - An online e-commerce store.
* [Storage](#app-storage) - Storages support.
* [View](#app-view) - Views rendering support.

# Credits

- [Tobias Strub](https://www.tobento.ch)
- [All Contributors](../../contributors)