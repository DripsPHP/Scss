<?php

namespace Drips\ScssCompiler;

use Drips\Utils\ICompiler;
use Leafo\ScssPhp\Compiler;

class ScssCompiler implements ICompiler
{
    public static function compile($string){
        $scss = new Compiler;
        return $scss->compile($string);
    }
}
