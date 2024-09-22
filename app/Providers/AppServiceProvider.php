<?php

namespace App\Providers;

use Doctrine\DBAL\Types\Type;
use Illuminate\Support\Facades\Schema;
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
    public function boot()
    {
        Schema::defaultStringLength(191);

        // Revisar si DBAL está habilitado y registrar el tipo "enum" en la base de datos
        if (class_exists('Doctrine\DBAL\Types\Type')) {
            Type::addType('enum', 'Doctrine\DBAL\Types\StringType');
            $platform = Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform();
            $platform->markDoctrineTypeCommented(Type::getType('enum'));
        }
    }
}
