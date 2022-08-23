<?php

namespace App\Repository\Company;

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
