# Seeds from SQL #
[![Latest Stable Version](https://img.shields.io/packagist/v/christian-schoenefeld/seeds-from-sql?style=flat-square)](https://packagist.org/packages/cristal/php-api-wrapper)
[![GitHub issues](https://img.shields.io/github/issues/christian-schoenefeld/seeds-from-sql?style=flat-square)](https://github.com/christian-schoenefeld/seeds-from-sql/issues)

## Introduction text ##

This package shows different approaches to using seeds from a sql file.

### Changelog ###

| Version | Description |
|:-------------:|:-------------:|
| `1.0.0` | First approach of SQL import using "DB:unprepared" |

## 📦 Installation ##

To install you can use composer as follows
```html
composer require christian-schoenefeld/seeds-from-sql
```
Then you have to add the seeder class to the main seeder class of the project and import the class there
```html
<?php

namespace Database\Seeders;

use ChristianSchoenefeld\SeedsFromSql\Database\Seeders\SQLSeeder;
...

class DatabaseSeeder extends Seeder
{
   ...
    public function run()
    {
        $this->call(SQLSeeder::class);
    }
    ...
}

```

## 🚀 Use ##

You can get the forms manually with the following Command

| Command        | Description         | functional         |
| -------------- |:-------------------:|:-------------------:|
| `php artisan migrate`     | Migrates the necessary unprepared table | ✔️|
| `php artisan db:seed`     | Executes all seeds |  ✔ |
| `php artisan db:seed --class=SQLSeeder`     | Executes only the SQL unprepared seed |  ✔ |
