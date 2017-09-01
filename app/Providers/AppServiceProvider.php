<?php

namespace TecnoAgenda\Providers;

use Illuminate\Support\ServiceProvider;
use TecnoAgenda\Entities\Pessoa;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    // Other Service Provider Properties...

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share(['letras'=> $this->getLetras()]);
    }

    private function getLetras(){
        return Pessoa::selectRaw('UPPER(substr(apelido, 1,1)) as first')->distinct()->orderBy('first')->pluck('first');
    }
}
