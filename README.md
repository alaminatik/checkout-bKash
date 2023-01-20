## Checkout bKash Payment Gateway Integration with Laravel 8

## Clone this repo
```
https://github.com/alaminatik/checkout-bKash
```

## Install composer packages
```
$ cd checkout-bKash
$ composer install
```

## Create and setup .env file
```
make a copy of .env.example and rename to .env
$ copy .env.example .env
$ php artisan key:generate
put database credentials in .env file
```

## Migrate and insert records
```
$ php artisan migrate
php artisan make:factory PaymentFactory --model=Payment

This will generate file in database/factories/PaymentFactory.php

Add protected $model = Payment::class;
Add fake data for each column

Add a seeder For PaymentTable by running command below.
php artisan make:seed PaymentTableSeeder

This command generate a file in database/seeders/PaymentTableSeeder.php

Next Update the run function of seeder file.

Then Run the command below to seed the data
php artisan db:seed --class=PaymentTableSeeder

```

## Put bKash sandbox credentials to config.json
```
create config.json file to storage/app/public
put credentials

```


Please visit my website.
[alaminmia.com](https://alaminmia.com) 
