<?php

declare(strict_types=1);

namespace App\Application\Repository\Company;

use App\Models\Company;
use Illuminate\Support\Collection;

class CompanyEloquentRepository implements CompanyRepositoryInterface
{
    public function get(string $id): Company
    {
        return Company::query()->get($id);
    }

    public function index(): Collection
    {
        return Company::query()->get();
    }
}
