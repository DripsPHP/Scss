<?php

namespace Drips\SccCompiler;

use Drips\Utils\ICompiler;
use scssc;

class ScssCompiler implements ICompiler
{
    public static function compile($string){
        $scss = new scssc;
        return $scss->compile($string);
    }
}
