<?php

namespace Mahmoudmhamed\InertiaVueHelpers\Providers;

use Illuminate\Support\ServiceProvider;
use Mahmoudmhamed\LaravelHelpers\Commands\MakeBaseModelCommand;
use Mahmoudmhamed\LaravelHelpers\Commands\MakeEnumCommand;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //publish clone lang to js command
        $this->publishes([
            __DIR__.'/../Commands/CloneLangToJs.php' => app_path('Console/Commands/CloneLangToJs.php'),
        ], 'command-clone-lang-to-js');

        //publish CloneAbilityToJs.php js command
        $this->publishes([
            __DIR__.'/../Classes/Abilities.php' => base_path('app/Classes/Abilities.php'),
            __DIR__.'/../Commands/CloneAbilityToJs.php' => app_path('Console/Commands/CloneAbilityToJs.php'),
        ], 'command-clone-ability-to-js');

        //publish AbilityDirective.js
        $this->publishes([
            __DIR__.'/../Directive/AbilityDirective.js' => base_path('resources/js/directive/AbilityDirective.js'),
        ], 'make-ability-directive');

        //publish Text.vue
        $this->publishes([
            __DIR__.'/../Components/Text.vue' => base_path('resources/js/Components/Text.vue'),
        ], 'TextComponent');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {

    }
}
