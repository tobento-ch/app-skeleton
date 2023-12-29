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

namespace App\Boot;

use Tobento\App\Boot;

/**
 * This boot does nothing at all and is not booted.
 * Its use is only to keep the src directory and for demo.
 */
class DemoBoot extends Boot
{
    public const INFO = [
        'boot' => [
            'a description of the boot method.',
        ],
    ];
    
    /**
     * Boot application services.
     *
     * @return void
     */
    public function boot(): void
    {
        // ...
    }
}