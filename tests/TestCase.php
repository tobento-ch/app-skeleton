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

namespace Tests;

use Tobento\App\Testing\TestCase as BaseTestCase;
use Tobento\App\AppInterface;

class TestCase extends BaseTestCase
{
    public function createApp(): AppInterface
    {
        return require __DIR__.'/../app/app.php';
    }
}