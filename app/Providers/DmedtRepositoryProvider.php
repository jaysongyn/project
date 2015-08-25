<?php

namespace Dmed\Providers;

use Illuminate\Support\ServiceProvider;

class DmedtRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \Dmed\Repositories\ClienteRepository::class,
            \Dmed\Repositories\ClienteRepositoryEloquent::class
        );

        $this->app->bind(
            \Dmed\Repositories\EmpresaRepository::class,
            \Dmed\Repositories\EmpresaRepositoryEloquent::class
        );

        $this->app->bind(
            \Dmed\Repositories\UserRepository::class,
            \Dmed\Repositories\UserRepositoryEloquent::class
        );
        $this->app->bind(
            \Dmed\Repositories\NotaRepository::class,
            \Dmed\Repositories\NotaRepositoryEloquent::class
        );

    }
}
