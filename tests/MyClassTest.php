<?php

/*
 * This file is part of Shudd3r/CI package.
 *
 * (c) Shudd3r <q3.shudder@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Shudd3r\CI\Tests;

use Shudd3r\CI\MyClass;
use PHPUnit\Framework\TestCase;


class MyClassTest extends TestCase
{
    public function testMethodReturnsSum()
    {
        $class = new MyClass();
        $this->assertSame(7, $class->testMe(3, 4));
    }
}
