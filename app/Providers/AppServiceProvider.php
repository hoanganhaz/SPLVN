<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Contract;
use Illuminate\Pagination\Paginator;

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

         Paginator::useBootstrapFive();
        // Share count of new contacts to admin layout header
        View::composer('admin.layout', function ($view) {
            $newContacts = 0;
            try {
                $newContacts = Contract::where('status', 0)->count();
            } catch (\Throwable $e) {
                // ignore DB errors when running migrations or during CLI tasks
                $newContacts = 0;
            }
            $view->with('newContactsCount', $newContacts);
        });
    }
}
