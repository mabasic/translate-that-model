## Requirements

- You must have a table `languages` in your database
- You must have a model for that table called `Language`

## Installation

1. Add `"mabasic/translate-that-model": "1.*"` to your composer require section and do `composer update` after that.

2. Next, add `Mabasic\TranslateThatModel\TranslateThatModelServiceProvider` to your service_providers array in `app.config`.

3. Publish config `php artisan config:publish mabasic/translate-that-model` and edit config file with your model extension for translated models and language table column name for storing code (en, hr, it...).

4. Add `use Mabasic\TranslateThatModel\TranslateThatModelTrait;` in your models that require translation.