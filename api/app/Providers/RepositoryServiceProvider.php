<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(\App\Repositories\Interfaces\AcomodacaoRepository::class,
            \App\Repositories\AcomodacaoRepositoryEloquent::class);

        $this->app->bind(\App\Repositories\Interfaces\AcomodacaoComentarioRepository::class,
            \App\Repositories\AcomodacaoComentarioRepositoryEloquent::class);

        $this->app->bind(\App\Repositories\Interfaces\AcomodacaoComodidadeRepository::class,
            \App\Repositories\AcomodacaoComodidadeRepositoryEloquent::class);

        $this->app->bind(\App\Repositories\Interfaces\AcomodacaoFotoRepository::class,
            \App\Repositories\AcomodacaoFotoRepositoryEloquent::class);

        $this->app->bind(\App\Repositories\Interfaces\AcomodacaoRegraRepository::class,
            \App\Repositories\AcomodacaoRegraRepositoryEloquent::class);

        $this->app->bind(\App\Repositories\Interfaces\AnfitriaoRepository::class,
            \App\Repositories\AnfitriaoRepositoryEloquent::class);

        $this->app->bind(\App\Repositories\Interfaces\AnuncioRepository::class,
            \App\Repositories\AnuncioRepositoryEloquent::class);

        $this->app->bind(\App\Repositories\Interfaces\ClienteRepository::class,
            \App\Repositories\ClienteRepositoryEloquent::class);

        $this->app->bind(\App\Repositories\Interfaces\LocalizacaoRepository::class,
            \App\Repositories\LocalizacaoRepositoryEloquent::class);

        $this->app->bind(\App\Repositories\Interfaces\ViagemRepository::class,
            \App\Repositories\ViagemRepositoryEloquent::class);
        //:end-bindings:
    }
}