# This is my package inertia-vue-helpers

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mahmoud-mhamed/inertia-vue-helpers.svg?style=flat-square)](https://packagist.org/packages/mahmoud-mhamed/inertia-vue-helpers)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/mahmoud-mhamed/inertia-vue-helpers/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/mahmoud-mhamed/inertia-vue-helpers/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/mahmoud-mhamed/inertia-vue-helpers/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/mahmoud-mhamed/inertia-vue-helpers/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mahmoud-mhamed/inertia-vue-helpers.svg?style=flat-square)](https://packagist.org/packages/mahmoud-mhamed/inertia-vue-helpers)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/inertia-vue-helpers.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/inertia-vue-helpers)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require mahmoud-mhamed/inertia-vue-helpers
```

## Before Use Any Command
##### must add \Mahmoudmhamed\LaravelHelpers\Providers\PackageServiceProvider::class to config=>app->providers array
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
php artisan vendor:publish --tag="command-clone-ability-to-js"
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

---

### publish vue commponets  to path resources/js/Components
| Tag             |                             publish file                              |  description |
|-----------------|:---------------------------------------------------------------------:|-------------:|
| ElTextComponent |                            Text/ElText.vue                            |              |
| ButtonComponent | Buttons/ ElPrimaryButton.vue,ElSecondaryButton.vue,ElSubmitButton.vue |              |
|                 |                          /ElLoadingDots.vue                           |              |



### You Can Run Command From package.json by add to scripts
```
{
    ....
    "scripts": {
        "lang": "php artisan lang:run && php artisan ability:run",
        "lang-run": "php artisan lang:run",
        "ability-run": "php artisan ability:run",
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
],

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
