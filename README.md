# This is my package inertia-vue-helpers

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mahmoud-mhamed/inertia-vue-helpers.svg?style=flat-square)](https://packagist.org/packages/mahmoud-mhamed/inertia-vue-helpers)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/mahmoud-mhamed/inertia-vue-helpers/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/mahmoud-mhamed/inertia-vue-helpers/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/mahmoud-mhamed/inertia-vue-helpers/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/mahmoud-mhamed/inertia-vue-helpers/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mahmoud-mhamed/inertia-vue-helpers.svg?style=flat-square)](https://packagist.org/packages/mahmoud-mhamed/inertia-vue-helpers)

[//]: # (This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.)

## Installation

You can install the package via composer:

```bash
composer require mahmoud-mhamed/inertia-vue-helpers
```

## Before Use Any Command
##### must add \Mahmoudmhamed\InertiaVueHelpers\Providers\PackageServiceProvider::class to config=>app->providers array
## Before Use Any Command
### for laravel < 11
##### must add  to config -> app -> providers array
```bash
  \Mahmoudmhamed\InertiaVueHelpers\Providers\PackageServiceProvider::class
```
### for laravel >= 11
##### must add to config -> app.php
```bash
  'providers' => ServiceProvider::defaultProviders()->merge([
        \Mahmoudmhamed\InertiaVueHelpers\Providers\PackageServiceProvider::class,
    ])->toArray()
```



to force publish any file add --force to command
---

Publish Command To Clone Enums From app => Enums To resources => js => enum.js:
```bash
php artisan vendor:publish --tag="clone-enums-to-js-command"
```
---

Publish Command To Clone Lang Folder from php To resources => js => lang:
```bash
php artisan vendor:publish --tag="clone-lang-to-js-command"
```
---

Publish Command To Clone Abilities from app => classes => Abilities.php To resources => js => ability.js:
```bash
php artisan vendor:publish --tag="copy-ability-to-js-command"
```
---

Publish Vue Ability directive
```bash
php artisan vendor:publish --tag="ability-directive"
```

add to app.js

import {ability_if,ability_else} from "@/directive/AbilityDirective";

.directive('ability', ability_if)

.directive('else-ability', ability_else)


### You Can Run Command From package.json by add to scripts
```
{
    ....
    "scripts": {
        "run-all": "php artisan lang:copy && php artisan ability:clone && php artisan enums:clone-to-js",
        "copy-lang": "php artisan lang:copy",
        "copy-ability": "php artisan ability:clone",
        "copy-enum": "php artisan enums:clone-to-js",
        "dev": "vite",
        "build": "vite build"
    },
    ...
}
```


### To allow auto generate file if use vite.config.js in plugins array add
```
    plugins: [
    ....
    {
        name: "enum_clone",
        enforce: "post",
        handleHotUpdate({ server, file }) {
            if (file.includes("/app/Enums")) {
                exec(
                    "php artisan enums:clone-to-js",
                    (error, stdout) =>
                        error === null &&
                        console.log(`Enum Js File Generated Successfully !`)
                );
            }
        },
    },
   {
    name: "lang",
    enforce: "post",
    handleHotUpdate({ server, file }) {
        if (file.includes("/lang/")) {
            exec(
                `php artisan lang:copy --lang=${file.includes('/ar/')?'ar':'en'} --file=${file.split('/').pop()}`,
                (error, stdout) =>
                    error === null &&
                    console.log(`Lang Generated Successfully !`)
            );
        }
    },
},
    {
        name: "ability",
        enforce: "post",
        handleHotUpdate({ server, file }) {
            if (file.includes("/Abilities.php")) {
                exec(
                    "php artisan ability:clone",
                    (error, stdout) =>
                        error === null &&
                        console.log(`Ability Clone Successfully !`)
                );
            }
        },
    },
],

```

---

### publish vue commponets  to path resources/js/Components
```bash
php artisan vendor:publish --tag="ElTextComponent"
php artisan vendor:publish --tag="ElButtonComponent"
php artisan vendor:publish --tag="ElFormComponents"
```
| Tag               |                             publish file                              |  description |
|-------------------|:---------------------------------------------------------------------:|-------------:|
| ElTextComponent   |                            Text/ElText.vue                            |              |
| ElButtonComponent | Buttons/ ElPrimaryButton.vue,ElSecondaryButton.vue,ElSubmitButton.vue |              |
|                   |                          /ElLoadingDots.vue                           |              |

### publish make chart js or  apex chart
```bash
npm i chart.js
npm i chartjs-plugin-datalabels

npm install --save apexcharts
npm install --save vue3-apexcharts

php artisan vendor:publish --tag="Chart"
```
## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [mahmoud-mhamed](https://github.com/mahmoud-mhamed)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
