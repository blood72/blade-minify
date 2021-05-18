<?php

namespace Blood72\Minify\Tests;

use Blood72\Minify\Blade;

class MinifyTest extends TestCase
{
    /**
     * @param string $file
     * @param string $extension
     * @test
     * @dataProvider minificationProvider
     */
    public function possible_to_minify($file, $extension)
    {
        [$actual, $expected] = $this->loadTestFiles($file, $extension);

        $this->assertEquals($expected, Blade::minify($actual, $this->options));
    }

    /**
     * @return array
     */
    public function minificationProvider()
    {
        return [
            ['app', 'php'],
            ['register', 'php'],
            ['register', 'html'],
            ['welcome', 'html'],
        ];
    }
}
