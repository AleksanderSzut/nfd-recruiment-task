<?php

declare(strict_types=1);

namespace App\Application\Repository\Company;

use App\Models\Company;
use Illuminate\Support\Collection;

interface CompanyRepositoryInterface
{
    public function get(string $id): Company;

    /**
     * @return Collection<Company>
     */
    public function index(): Collection;
}
