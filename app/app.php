<?php

/**
 * TOBENTO
 *
 * @copyright   Tobias Strub, TOBENTO
 * @license     MIT License, see LICENSE file distributed with this source code.
 * @author      Tobias Strub
 * @link        https://www.tobento.ch
 */

declare(strict_types=1);

use Tobento\App\AppFactory;

// Register the autoloader ------------------------------------------------
require __DIR__ . '/../vendor/autoload.php';

// Create the application -------------------------------------------------
$app = (new AppFactory())->createApp();
//-------------------------------------------------------------------------

// Add directories --------------------------------------------------------
$app->dirs()
    ->dir(realpath(__DIR__.'/../'), 'root')
    ->dir(realpath(__DIR__), 'app')
    ->dir($app->dir('app').'config', 'config', group: 'config', priority: 10)
    ->dir($app->dir('root').'vendor', 'vendor')
    ->dir($app->dir('root').'public', 'public');
//-------------------------------------------------------------------------

// Boot the app -----------------------------------------------------------
$app->boot(\Tobento\App\Boot\App::class);

return $app;