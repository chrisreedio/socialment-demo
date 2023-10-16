<?php

namespace App\Providers;

use ChrisReedIO\Socialment\Facades\Socialment;
use ChrisReedIO\Socialment\Models\ConnectedAccount;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Socialment::postLogin(function (ConnectedAccount $connectedAccount) {
			// Handle custom post login logic here.
		});
    }
}
