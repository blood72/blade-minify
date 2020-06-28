<?php

namespace Blood72\Minify\Test;

use JSMin\JSMin as JSMinifier;
use Minify_CSSmin as CSSMinfier;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /** @var array */
    protected $options = [];

    protected static $path = __DIR__ . '/views';

    /**
     * This method is called before each test.
     */
    protected function setUp(): void
    {
        $this->options = [
            'cssMinifier' => [CSSMinfier::class, 'minify'],
            'jsMinifier' => [JSMinifier::class, 'minify'],
        ];
    }
}
