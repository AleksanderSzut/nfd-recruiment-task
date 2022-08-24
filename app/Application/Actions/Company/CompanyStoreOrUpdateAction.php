<?php

declare(strict_types=1);

namespace App\Application\Actions\Company;

use App\Http\Requests\CompanyStoreRequest;
use App\Models\Company;

class CompanyStoreOrUpdateAction
{
    public function __construct(private CompanySaveAction $companySaveAction)
    {
    }

    public function execute(CompanyStoreRequest $request): Company
    {
        $request->company->name = $request->name;
        $request->company->nip = $request->nip;
        $request->company->address = $request->address;
        $request->company->zip = $request->zip;

        $this->companySaveAction->execute($request->company);

        return $request->company;
    }
}
