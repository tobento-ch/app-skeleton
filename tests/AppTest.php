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

use PHPUnit\Framework\TestCase;
use Tobento\App\AppFactory;
use Tobento\App\AppInterface;

/**
 * AppTest
 */
class AppTest extends TestCase
{
    public function testCreateApp()
    {
        $app = (new AppFactory())->createApp();
        
        $this->assertInstanceof(AppInterface::class, $app);
    }
}