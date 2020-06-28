<?php

namespace Blood72\Minify\Test;

use Blood72\Minify\Blade;

class MinifyTest extends TestCase
{
    /** @test */
    public function it_is_possible_to_minify_compiled_blade_file_in_case_1()
    {
        [$actual, $expected] = $this->loadTestFiles('app', 'php');

        $this->assertEquals($expected, Blade::minify($actual, $this->options));
    }

    /** @test */
    public function it_is_possible_to_minify_compiled_blade_file_in_case_2()
    {
        [$actual, $expected] = $this->loadTestFiles('register', 'php');

        $this->assertEquals($expected, Blade::minify($actual, $this->options));
    }

    /** @test */
    public function it_is_also_possible_to_minify_html_case_1()
    {
        [$actual, $expected] = $this->loadTestFiles('welcome', 'html');

        $this->assertEquals($expected, Blade::minify($actual, $this->options));
    }

    /** @test */
    public function it_is_also_possible_to_minify_html_case_2()
    {
        [$actual, $expected] = $this->loadTestFiles('register', 'html');

        $this->assertEquals($expected, Blade::minify($actual, $this->options));
    }

    /**
     * @param string $file
     * @param string $extension
     * @return array
     */
    protected function loadTestFiles($file, $extension)
    {
        $actual = file_get_contents(self::$path . "/$file.$extension");
        $expected = file_get_contents(self::$path . "/$file.min.$extension");

        return [$actual, $expected];
    }
}
