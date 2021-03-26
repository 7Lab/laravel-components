# LaravelComponents

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

## Installation

Via Composer

``` bash
$ composer require 7lab/laravel-components
```

Run the following command to publish the styles to the scss directory
``` bash
$ php artisan components:publish
```

Add the following code to you webpack.mix.js. Located in the root of your laravel project.
```javascript
mix.sass('resources/scss/7lab/app.scss', 'public/css/components.css');
```

And include the css in you blade files
```html
<link rel="stylesheet" href="{{ asset('css/components.css') }}">
```

## Updating
To update the components, you can update the package with 
``` bash
$ composer update 7lab/laravel-components
```

To get the latest styles, we strongly recommend to make a backup of the current scss files located in `resources/scss/7lab`. You can update the styles with
``` bash
$ php artisan components:publish
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/7lab/laravel-components.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/7lab/laravel-components.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/7lab/laravel-components
[link-downloads]: https://packagist.org/packages/7lab/laravel-components
