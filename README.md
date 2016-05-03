# ScssCompiler

[![Build Status](https://travis-ci.org/Prowect/ScssCompiler.svg)](https://travis-ci.org/Prowect/ScssCompiler)
[![Code Climate](https://codeclimate.com/github/Prowect/ScssCompiler/badges/gpa.svg)](https://codeclimate.com/github/Prowect/ScssCompiler)
[![Test Coverage](https://codeclimate.com/github/Prowect/ScssCompiler/badges/coverage.svg)](https://codeclimate.com/github/Prowect/ScssCompiler/coverage)
[![Latest Release](https://img.shields.io/packagist/v/drips/ScssCompiler.svg)](https://packagist.org/packages/drips/scsscompiler)

Mithilfe des ScssCompilers kann SCSS in CSS übersetzt werden. Dies funktioniert wie folgt:

```php
<?php

use Drips\ScssCompiler\ScssCompiler;

$scss_file = "path/to/file.scss";
$css_file = "path/to/style.css";

// Inhalt der SCSS-Datei auslesen
$scss = file_get_contents($scss_file);
// SCSS mithilfe des ScssCompilers in CSS übersetzen
$compiler = new ScssCompiler;
$css = $compiler->compile($scss);
// CSS-Code in die jeweilige Datei schreiben
file_put_contents($css_file, $css);
```
