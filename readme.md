# Laravel Carbon Date Arabic Translator الترجمة الفعلية للتوايخ باللغة العربية

[![Latest Stable Version](https://poser.pugx.org/alkoumi/carbon-date-translator/v/stable)](https://packagist.org/packages/alkoumi/carbon-date-translator)
[![Total Downloads](https://poser.pugx.org/alkoumi/carbon-date-translator/downloads)](https://packagist.org/packages/alkoumi/carbon-date-translator)
[![License](https://poser.pugx.org/alkoumi/carbon-date-translator/license)](https://packagist.org/packages/alkoumi/carbon-date-translator)
<a href="https://github.styleci.io/repos/218074760"><img src="https://github.styleci.io/repos/218074760/shield?branch=master" alt="StyleCI"></a>

Laravel package to translate carbon date to our Amazing 💝 Arabic language even the future dates. to look like [قبل ٥ دقائق] , [بعد سبع ساعات] 

## Installation Up to Laravel 6

You can install the package via composer:

	composer require alkoumi/carbon-date-translator

The service provider will automatically get registered. Or you may manually add the service provider in your `config/app.php` file:

    'providers' => [
        // ...
        Alkoumi\CarbonDateTranslator\CarbonDateTranslatorServiceProvider::class,
    ];
## Usage
Simply pass an instance of carbon `$date` to the method `TransDate::inArabic($date)`
```php
	$row = App\User::first();
	$differenceInArabic = TransDate::inArabic($row->created_at);
        // Result1 => "قبل سبع ساعات"
        // Result2 => "بعد سبع ساعات"
```
