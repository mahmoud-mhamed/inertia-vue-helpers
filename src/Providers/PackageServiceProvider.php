<?php

namespace Mahmoudmhamed\InertiaVueHelpers\Providers;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //publish copy enums to js command
        $this->publishes([
            __DIR__.'/../Commands/CopyEnumsToJsCommand.php' => app_path('Console/Commands/CopyEnumsToJsCommand.php'),
        ], 'clone-enums-to-js-command');

        //publish copy lang to js command
        $this->publishes([
            __DIR__.'/../Commands/CopyLangToJsCommand.php' => app_path('Console/Commands/CopyLangToJsCommand.php'),
        ], 'clone-lang-to-js-command');


        //publish CloneAbilityToJs.php js command
        $this->publishes([
            __DIR__.'/../Classes/Abilities.php' => base_path('app/Classes/Abilities.php'),
            __DIR__.'/../Enums/ModuleNameEnum.php' => base_path('app/Enums/ModuleNameEnum.php'),
            __DIR__.'/../Commands/CloneAbilityToJs.php' => app_path('Console/Commands/CloneAbilityToJs.php'),
        ], 'copy-ability-to-js-command');

        //publish AbilityDirective.js
        $this->publishes([
            __DIR__.'/../Directive/AbilityDirective.js' => base_path('resources/js/directive/AbilityDirective.js'),
        ], 'ability-directive');

        //publish Text.vue
        $this->publishes([
            __DIR__ . '/../Components/Text/ElText.vue' => base_path('resources/js/Components/Text/ElText.vue'),
        ], 'ElTextComponent');

        //publish Buttons
        $this->publishes([
            __DIR__.'/../Components/Buttons' => base_path('resources/js/Components/Buttons'),
            __DIR__.'/../Components/ElLoadingDots.vue' => base_path('resources/js/Components/ElLoadingDots.vue'),
        ], 'ElButtonComponent');


        //publish chart components
        $this->publishes([
            __DIR__.'/../Components/Charts' => base_path('resources/js/Components/Charts'),
            __DIR__.'/../Chart' => base_path('app/Chart'),
            __DIR__.'/../../config/charts.php' => base_path('app/config/charts.php'),
        ], 'Chart');
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
