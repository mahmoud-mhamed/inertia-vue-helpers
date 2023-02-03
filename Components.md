>before publish must add \Mahmoudmhamed\InertiaVueHelpers\Providers\PackageServiceProvider::class, to config->app->providers array
```
\Mahmoudmhamed\InertiaVueHelpers\Providers\PackageServiceProvider::class,
```
You can publish files by:
>publish resources/js/Components/Text.vue
```bash
php artisan vendor:publish --tag="TextComponent"
