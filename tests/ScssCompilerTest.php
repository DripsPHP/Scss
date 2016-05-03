<?php

namespace tests;

use Drips\ScssCompiler\ScssCompiler;
use PHPUnit_Framework_TestCase;

class ScssCompilerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dateProvider
     */
    public function testScssCompiler($scss, $css)
    {
        $compiler = new ScssCompiler;
        $this->assertEquals($compiler->compile($scss), $css);
    }

    public function dateProvider()
    {
        return array(
            array(file_get_contents(__DIR__."/test.scss"), file_get_contents(__DIR__."/test.css"))
        );
    }
}
