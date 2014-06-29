## Requirements

- You must have a table `languages` in your database
- You must have a model for that table called `Language`

## Installation

1. Add `mabasic/TranslateThatModel/TranslateThatModelServiceProvider` to your service_providers array in `app.config`.

2. Publish config `php artisan config:publish mabasic/TranslateThatModel` and edit config file with your model extension for translated models and language table column name for storing code (en, hr, it...).

3. 