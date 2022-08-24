<?php

namespace App\Application\Actions\Company;

use App\Models\Company;

class CompanySaveAction
{
    public function execute(Company $company): bool
    {
        return $company->save();
    }
}
