# BillPlzv3

Before we get started, check out [BillPlz API](https://www.billplz.com/api)

Require this package with composer using the following command:

    composer require hazelnuts23\BillPlzv3

After updating composer, add the `BillPlzv3ServiceProvider` to the `providers` array in `config/app.php`

    hazelnuts23\BillPlzv3\BillPlzv3ServiceProvider::class,

And `BillPlz` alias to the `aliases` array in `config/app.php`

    'BillPlz' => hazelnuts23\BillPlzv3\Billplzv3::class,

Run `php artisan vendor:publish` and `config/billplz.php` will be created for you to configure BillPlz API.