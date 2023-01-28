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
