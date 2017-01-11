<?php
require '../miniscule.php';
use Woodscreative\Miniscule as Miniscule;

// Change salt to generate a new hash/asset
$salt         = '1.0';
$forceRefresh = true;
$minify       = false;
  
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

<h1>Miniscule Test</h1>

<!-- Scripts -->
<link href="<?=$cssPath;?>" rel="stylesheet" type="text/css">
<script src="<?=$jsPath;?>" type="text/javascript"></script>

<h4>Generated CSS</h4>
<p>See <a href="<?=$cssPath;?>"><?=$cssPath;?></a></p>

<h4>Generated JS<h4>
<p>See <a href="<?=$jsPath;?>"><?=$jsPath;?></a></p>

<h4>JS Test</h4>
<script>
/**
 * Test parsed js
 */
console.log( "APP.js said: " + APP.test );
document.write( APP.test );
</script>
</p>


