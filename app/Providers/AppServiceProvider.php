<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator; //Google Recaptcha: include

class AppServiceProvider extends ServiceProvider
{
	
	/**
     * Bootstrap any application services.
     *
     * @return void
     */
	
	//Google Recaptcha: Add New Validation Rule
	public function boot(){
		Validator::extend('recaptcha', 'App\\Validators\\ReCaptcha@validate');
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
