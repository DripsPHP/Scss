<?php

namespace tests;

use Drips\ScssCompiler\ScssCompiler;
use PHPUnit_Framework_TestCase;

include __DIR__.'/../vendor/autoload.php';

class ScssCompilerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dateProvider
     */
    public function testScssCompiler($scss, $css)
    {
        $this->assertEquals(ScssCompiler::compile($scss), $css);
    }

    public function dateProvider()
    {
        return array(
            array(file_get_contents(__DIR__."/test.scss"), file_get_contents(__DIR__."/test.css"))
        );
    }
}
