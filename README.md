# Blade Minifier

Blade Minifier for personal use  

Obviously this doesn't minify the .blade.php format itself.  
This is specialized minification in the compiled .php by the Laravel Blade Compiler.

## Index

- [Requirement](#requirement)
- [Installation](#installation)
- [Usage](#usage)
- [Example](#example)
- [Reference](#reference)
- [License](#license)

## Requirement

- PHP >= 7.2
- mrclay/minify ^3.0

## Installation

Install using the composer.

```bash
composer require blood72/blade-minify
```

## Usage

- simple run

    ```php
    use Blood72\Minify\Blade as BladeMinifier;
    
    $minified = BladeMinifier::minify('<HTML string>');
    ```

- with CSS, JavaScript Minifier \(its installed by default with this package)

    ```php
    use Blood72\Minify\Blade as BladeMinifier;
    use JSMin\JSMin as JSMinifier;
    use Minify_CSSmin as CSSMinifier;
    
    $minified = BladeMinifier::minify('<HTML string>', [
        'cssMinifier' => [CSSMinifier::class, 'minify'],
        'jsMinifier' => [JSMinifier::class, 'minify'],
    ]);
    ```

## Example

```html
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
```

```html
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
```

You can compare test files [original](./tests/views/register.html) with [minified](./tests/views/register.min.html).  
see more [examples](./tests/views) 

## Reference

- Steve Clay's [minify](https://github.com/mrclay/minify)

## License

This package is open-sourced software licensed under the MIT license.
