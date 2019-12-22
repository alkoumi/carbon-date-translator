# Laravel Carbon Date Arabic Translator الترجمة الفعلية للتوايخ باللغة العربية 

Laravel package to translate carbon date to our Amazing 💝 Arabic language even the future dates. to look like [منذ ٥ دقائق] , [بعد سبع ساعات] 

## Installation Up to Laravel 6

You can install the package via composer:

	composer require alkoumi/carbon-date-translator

The service provider will automatically get registered. Or you may manually add the service provider in your `config/app.php` file:

    'providers' => [
        // ...
        Alkoumi\CarbonDateTranslator\CarbonDateTranslatorServiceProvider::class,
    ];

## Usage

Simply pass an instance of carbon date to the method TransDate::inArabic()

```php
	$row = App\User::first();
	$differenceInArabic = TransDate::inArabic($row->created_at);
        // Result1 => "منذ سبع ساعات"
        // Result2 => "بعد سبع ساعات"
```