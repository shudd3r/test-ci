<?php

/*
 * This file is part of Shudd3r/CI package.
 *
 * (c) Shudd3r <q3.shudder@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Shudd3r\CI;


class MyClass
{
    /**
     * @param int $a
     * @param int $b
     *
     * @return int
     */
    public function testMe(int $a, int $b): int
    {
        return $a + $b;
    }
}
