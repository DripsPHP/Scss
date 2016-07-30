# ScssCompiler

[![Build Status](https://travis-ci.org/Prowect/Scss.svg)](https://travis-ci.org/Prowect/Scss)
[![Code Climate](https://codeclimate.com/github/Prowect/ScssCompiler/badges/gpa.svg)](https://codeclimate.com/github/Prowect/ScssCompiler)
[![Test Coverage](https://codeclimate.com/github/Prowect/ScssCompiler/badges/coverage.svg)](https://codeclimate.com/github/Prowect/ScssCompiler/coverage)
[![Latest Release](https://img.shields.io/packagist/v/drips/Scss.svg)](https://packagist.org/packages/drips/scss)

Mithilfe des ScssCompilers kann SCSS in CSS übersetzt werden. Dies funktioniert wie folgt:

```php
<?php

use Drips\Scss\Compiler;

$scss_file = "path/to/file.scss";
$css_file = "path/to/style.css";

// Inhalt der SCSS-Datei auslesen
$scss = file_get_contents($scss_file);
// SCSS mithilfe des ScssCompilers in CSS übersetzen
$compiler = new Compiler;
$css = $compiler``->compile($scss);
// CSS-Code in die jeweilige Datei schreiben
file_put_contents($css_file, $css);
```

Zusätzlich beinhaltet der ScssCompiler einen Controller zum automatischen Ausliefern von SCSS-Dateien als CSS-Dateien. D.h. sie werden automatisch übersetzt.

In deinem `DRIPS` Verzeichnis legst du zunächst ein Verzeichnis `scss` an. In diesem befinden sich alle deine SCSS-Dateien, die du später gerne übersetzt ausliefern möchtest. Anschließend musst du den jeweiligen Controller als Route registrieren, dass die Datei automatisch ausgeliefert werden kann.

```php
<?php

$router->add('scss', '/css/{file}.css', Drips\Scss\Controller::class);
``