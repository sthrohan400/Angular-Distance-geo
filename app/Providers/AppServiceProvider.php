<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //require_once('boot.php');  
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->registerForexRepository();
        $this->registerCountryRepository();
        $this->registerConversionRepository();
        $this->registerRashiRepository();
       
        //
    }

    public function registerCountryRepository() {
        return $this->app->bind(
            'App\\Repositories\\Country\\CountryRepository',
            'App\\Repositories\\Country\\EloquentCountry'
        );
    }
     public function registerConversionRepository() {
        return $this->app->bind(
            'App\\Repositories\\Conversion\\ConversionRepository',
            'App\\Repositories\\Conversion\\EloquentConversion'
        );
    }
	

	public function registerForexRepository() {
        return $this->app->bind(
            'App\\Repositories\\Api\\ApiRepository',
            'App\\Repositories\\Api\\EloquentApi'
        );
    }
    public function registerRashiRepository() {
		return $this->app->bind(
			'App\\Repositories\\Rashi\\RashiRepository',
			'App\\Repositories\\Rashi\\EloquentRashi'
		);
	}

	/**/
}