# Miniscule Example

In your script

```
use Woodscreative\Miniscule as Miniscule;
/**
 * CSS Parsing
 */
$cssPath = Miniscule::getHashedSrc([
  'source'       => 'css/theme/base.css',
  'salt'         => APP_VERSION,
  'forceRefresh' => APP_THEME_FORCE_REFRESH,
  'minify'       => APP_THEME_MINIFY_ENABLED
  ], 'css'
);
/**
 * JS Parsing
 */
$jsPath = Miniscule::getHashedSrc([
  'source'        => 'js/base.php',
  'extension'     => '.js',
  'salt'          => APP_VERSION,
  'forceRefresh'  => APP_THEME_FORCE_REFRESH,
  'minify'        => APP_THEME_MINIFY_ENABLED
  ], 'js'
);
```

In your HTML

```
<!-- Scripts -->
<?php if(isset($cssPath)) { ?><link href="/<?=$cssPath;?>" rel="stylesheet" type="text/css" /><?php "\n"; }; ?>
<?php if(isset($jsPath)) { ?><script src="/<?=$jsPath;?>" type="text/javascript"></script><?php "\n"; }; ?>
```
