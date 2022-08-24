<?php

declare(strict_types=1);

namespace App\Providers;

use App\Application\Repository\Company\CompanyEloquentRepository;
use App\Application\Repository\Company\CompanyRepositoryInterface;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider implements DeferrableProvider
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
