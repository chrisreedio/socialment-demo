<?php

namespace App\Providers;

use ChrisReedIO\Socialment\Facades\Socialment;
use ChrisReedIO\Socialment\Models\ConnectedAccount;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;

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
			Log::info('User logged in with ' . $connectedAccount->provider . ' account', [
				'connectedAccount' => $connectedAccount,
			]);
		});
    }
}
