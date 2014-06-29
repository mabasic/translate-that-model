# TranslateThatModel

This package enables you to easily fetch localized columns from your models.

## Requirements

- You must have a table `languages` in your database
- You must have a model for that table called `Language`

## Installation

1. Add `"mabasic/translate-that-model": "1.0.*"` to your composer require section and do `composer update` after that.

2. Next, add `mabasic/TranslateThatModel/TranslateThatModelServiceProvider` to your service_providers array in `app.config`.

3. Publish config `php artisan config:publish mabasic/TranslateThatModel` and edit config file with your model extension for translated models and language table column name for storing code (en, hr, it...).

4. Add `use mabasic\TranslateThatModel\TranslateThatModelTrait;` in your models that require translation.

## Usage

```php
// get realestates and eager load city and nested relationship translations
$realestate = Realestate::with('city.translations')->get();

// display translated name on current application locale
{{ $realestate->city->translations->first()->name }}
//or 
// specify on which locale you want it returned
{{ $realestate->city->translations('hr')->first()->name }}
```

## Info

If you have any questions or need more usage examples or features feel free to open a issue or contact me.

### Credits

This package is inspired by [laravel-translatable](https://github.com/dimsav/laravel-translatable).

> The reason why I could not just use the package above is that it assumes that I keep locale field in every table that holds translations.
I keep locale field in my language table. After looking at the source code I concluded that It would be simpler to create my own package, because I don't need those fancy model update options.


