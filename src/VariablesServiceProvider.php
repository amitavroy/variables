<?php

namespace Amitav\Variables;

use Amitav\Variables\VariablesHelper;
use Illuminate\Support\ServiceProvider;

class VariablesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (!class_exists('CreateVariablesTable')) {
            $this->publishes([
                __DIR__ . '/../database/migrations/create_variables_table.php.stub' =>
                database_path('migrations/' . date('Y_m_d_His', time()) . '_create_variables_table.php'),
            ], 'migrations');
        }

        $this->app->singleton('variables', function ($app) {
            return new VariablesHelper;
        });
    }

    public function providers()
    {
        return ['variables'];
    }
}
