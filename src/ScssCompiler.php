<?php

namespace Drips\ScssCompiler;

use Drips\Utils\ICompiler;
use Leafo\ScssPhp\Compiler;

class ScssCompiler implements ICompiler
{
    private static $compiler;

    public static function compile($string)
    {
        if(static::$compiler == null){
            static::$compiler = new Compiler;
        }

        return static::$compiler->compile($string);
    }
}
