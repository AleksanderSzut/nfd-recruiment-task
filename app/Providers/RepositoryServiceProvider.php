<?php

namespace App\Providers;

use App\Repository\Company\CompanyEloquentRepository;
use App\Repository\Company\CompanyRepositoryInterface;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider  implements DeferrableProvider
{
    public function register()
    {
        $this->app->bind(CompanyRepositoryInterface::class, CompanyEloquentRepository::class);
    }

    public function provides(): array
    {
        return [CompanyEloquentRepository::class];
    }
}
