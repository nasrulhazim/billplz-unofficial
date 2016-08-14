# BillPlzv3

Before we get started, check out [BillPlz API](https://www.billplz.com/api)

Require this package with composer using the following command:

    composer require nasrulhazim\laravel-billplz

After updating composer, add the `LaraBillPlzServiceProvider` to the `providers` array in `config/app.php`

    nasrulhazim\LaraBillPlz\Providers\LaraBillPlzServiceProvider::class,

Run `php artisan vendor:publish` and `config/billplz.php` will be created for you to configure BillPlz API.

Following LaraBillPlz helpers available

```php
createBillPlz($callbackurl, $redirectul, $data = []);
```

```php
getBillPlz($id);
```

```php
deleteBillPlz($id)
```