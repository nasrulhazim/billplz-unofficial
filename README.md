# BillPlz Package for Laravel

Before we get started, check out [BillPlz API](https://www.billplz.com/api)

Require this package with composer using the following command:

    composer require nasrulhazim\billplz

After updating composer, add the `LaraBillPlzServiceProvider` to the `providers` array in `config/app.php`

    LaraBillPlz\Providers\LaraBillPlzServiceProvider::class,

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

# Usage Sample

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PaymentsController extends Controller
{
    public function cart()
    {
    	return view('payments.cart');
    }

    public function pay()
    {
        $data = [
            'title' => 'Purchase BillPlz Package for Laravel',
            'name' => 'Nasrul Hazim',
            'amount' => 200.00,
            'description' => 'BillPlz Package for Laravel',
            'email' => 'nasrulhazim.m@gmail.com'
        ];
    	$blpz = createBillPlz(route('payments.callback'), route('payments.redirect'), $data);

    	return redirect($blpz['bill']['url']);
    }

    public function callBackUrl(Request $request)
    {
    	dd($request->input());
    }

    public function redirectUrl(Request $request)
    {
    	dd($request->input());
    }
}
```