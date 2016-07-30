<?php

namespace Drips\Scss;

use Drips\Minimize\Compiler as MinimizeCompiler;
use Drips\MVC\CompileController;

define('DRIPS_SCSS_DIRECTORY', (defined('DRIPS_DIRECTORY') ? DRIPS_DIRECTORY : __DIR__) . '/scss');

class Controller extends CompileController
{
    protected $source_directory = DRIPS_SCSS_DIRECTORY;
    protected $file_extension = "scss";
    protected $response_type = "text/css";
    protected $minimize = true;

    public function compile($content)
    {
        $compiler = new Compiler;
        $compiler->setImportPaths($this->source_directory);
        $compiled = $compiler->compile($content);
        if ($this->minimize) {
            $compiled = MinimizeCompiler::compile($compiled, MinimizeCompiler::CSS);
        }
        return $compiled;
    }
}
