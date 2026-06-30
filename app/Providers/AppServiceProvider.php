<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\View;
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
        // Share admin full name with all views (used as layout title fallback)
        View::composer('*', function ($view) {
            $admin = User::where('is_admin', true)->latest()->first();
            $fullName = null;
            if ($admin) {
                $fullName = trim(($admin->first_name ?? '') . ' ' . ($admin->last_name ?? '')) ?: $admin->name;
            }

            $view->with('fullName', $fullName);
        });
    }
}
