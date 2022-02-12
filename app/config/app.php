<?php

/**
 * TOBENTO
 *
 * @copyright    Tobias Strub, TOBENTO
 * @license     MIT License, see LICENSE file distributed with this source code.
 * @author      Tobias Strub
 * @link        https://www.tobento.ch
 */

return [
    
    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | Possible application environments:
    | production, development, local or any custom named.
    |
    */
    
    'environment' => 'local',
    
    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, 
    | detailed error messages will be shown on every error that occurs.
    | If disabled, a simple generic error page is shown.
    |
    */

    'debug' => true,    

    /*
    |--------------------------------------------------------------------------
    | Application Timezone and Locale
    |--------------------------------------------------------------------------
    |
    | The application timezone and locale.
    |
    */
        
    'timezone' => 'Europe/Berlin',
    
    'locale' => 'de-DE',
    
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
    ],
    
];