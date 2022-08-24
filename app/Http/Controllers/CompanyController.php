<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Application\Actions\Company\CompanyStoreOrUpdateAction;
use App\Application\Repository\Company\CompanyRepositoryInterface;
use App\Http\Requests\CompanyStoreRequest;
use App\Models\Company;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(CompanyRepositoryInterface $repository): JsonResponse
    {
        return new JsonResponse($repository->index());
    }

    public function store(CompanyStoreRequest $request, CompanyStoreOrUpdateAction $action): JsonResponse
    {
        return new JsonResponse([$action->execute($request)]);
    }

    public function show(Company $company): JsonResponse
    {
        return new JsonResponse([]);
    }

    public function edit(Company $company): JsonResponse
    {
        return new JsonResponse([]);
    }

    public function update(Request $request, Company $company): JsonResponse
    {
        return new JsonResponse([]);
    }

    public function destroy(Company $company): JsonResponse
    {
        return new JsonResponse([]);
    }
}
