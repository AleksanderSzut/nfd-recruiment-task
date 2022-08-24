<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\Company;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $nip
 * @property string $name
 * @property string $address
 * @property string $zip
 */
class CompanyStoreRequest extends FormRequest
{
    public Company $company;

    public function authorize(): bool
    {
        $this->company = new Company();

        return true;
    }

    public function rules(): array
    {
        return [
            'nip' => ['required', 'digits:9'],
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'min:1', 'max:255'],
            'city' => ['required', 'string', 'min:1', 'max:255'],
            'zip' => ['required', 'string', 'min:1', 'max:255'],
        ];
    }
}
