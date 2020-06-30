<?php

namespace Blood72\Minify\Test;

use Blood72\Minify\Blade;

class MinifyTest extends TestCase
{
    /** @test */
    public function it_is_possible_to_minify_compiled_blade_file_that_is_standalone()
    {
        [$actual, $expected] = $this->loadTestFiles('app', 'php');

        $this->assertEquals($expected, Blade::minify($actual, $this->options));
    }

    /** @test */
    public function it_is_possible_to_minify_compiled_blade_file_that_is_extended()
    {
        [$actual, $expected] = $this->loadTestFiles('register', 'php');

        $this->assertEquals($expected, Blade::minify($actual, $this->options));
    }

    /** @test */
    public function it_is_also_possible_to_minify_html_that_rendered_in_actual_html()
    {
        [$actual, $expected] = $this->loadTestFiles('register', 'html');

        $this->assertEquals($expected, Blade::minify($actual, $this->options));
    }

    /** @test */
    public function it_is_also_possible_to_minify_html_that_contains_style_tag()
    {
        [$actual, $expected] = $this->loadTestFiles('welcome', 'html');

        $this->assertEquals($expected, Blade::minify($actual, $this->options));
    }
}
