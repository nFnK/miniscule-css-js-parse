# Miniscule

A PHP CSS/JS asset compiler. Compiles resources into a single asset file that can be minified for output. Output file name is hashed using the defined **salt**. When the salt is changed a new file is created.

## Installing

```
composer require woodscreative/miniscule
```

## Using

See **/example** for further deets.

## PHP

```
<?php
require 'vendor/woodscreative/miniscule/miniscule.php';
use Woodscreative\Miniscule as Miniscule;

$salt         = '1.0';
$forceRefresh = true;
$minify       = true;
  
/**
 * CSS Parsing
 */
Miniscule::set('css',[
  'assets/css/base.css'
]);
// Add another resource if required (merged)
Miniscule::set('css',[
  'assets/css/example.css'
]);
$cssPath = Miniscule::get('css',[
  'salt'            => $salt,
  'forceRefresh'    => $forceRefresh,
  'minify'          => $minify,
  'outputDirectory' => 'assets/css'
]);
/**
 * JS Parsing
 */
// Add multiple resources at once
Miniscule::set('js',[
  'assets/js/vars.js',
  'assets/js/app.js'
]);
$jsPath = Miniscule::get('js',[
  'salt'            => $salt,
  'forceRefresh'    => $forceRefresh,
  'minify'          => $minify,
  'outputDirectory' => 'assets/js'
]);
?>
```

## HTML

```
<link href="<?=$cssPath;?>" rel="stylesheet" type="text/css">
<script src="<?=$jsPath;?>" type="text/javascript"></script>
```
