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

namespace Tests\Feature;

use Tests\TestCase;

class DemoTest extends TestCase
{
    public function testAppRuns(): void
    {
        $app = $this->runApp();
        
        $this->assertTrue(true);
    }
}