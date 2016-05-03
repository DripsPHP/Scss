<?php

namespace Drips\ScssCompiler;

use Drips\MVC\CompileController;

class Controller extends CompileController
{
    protected $source_directory = "scss";
    protected $file_extension = "scss";
    protected $response_type = "text/css";

    public function compile($content)
    {
        $compiler = new ScssCompiler;
        $compiler->setImportPath($this->source_directory);
        return $compiler->compile($content);
    }
}
