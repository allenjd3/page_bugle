<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Collective\Html\FormFacade as Form;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsText', 'components.text', ['name', 'prettyname', 'value'=>null, 'attributes'=>[]]);
        Form::component('bsEmail', 'components.email', ['name', 'prettyname', 'value'=>null, 'attributes'=>[]]);
        Form::component('bsTextarea', 'components.textarea', ['name', 'prettyname', 'value'=>null, 'attributes'=>[]]);
        Form::component('bsFile', 'components.file', ['name', 'prettyname']);
        Form::component('bsPassword', 'components.password', ['name', 'prettyname']);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
