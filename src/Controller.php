<?php

namespace Drips\ScssCompiler;

use Drips\MVC\CompileController;
use Drips\MinimizeCompiler\MinimizeCompiler;

define('DRIPS_SCSS_DIRECTORY', DRIPS_DIRECTORY.'/scss');

class Controller extends CompileController
{
    protected $source_directory = DRIPS_SCSS_DIRECTORY;
    protected $file_extension = "scss";
    protected $response_type = "text/css";
    protected $minimize = true;

    public function compile($content)
    {
        $compiler = new ScssCompiler;
        $compiler->setImportPaths($this->source_directory);
        $compiled = $compiler->compile($content);
        if($this->minimize){
            $compiled = MinimizeCompiler::compile($compiled, MinimizeCompiler::CSS);
        }
        return $compiled;
    }
}
