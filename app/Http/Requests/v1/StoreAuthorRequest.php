<?php

namespace App\Http\Requests\v1;

use App\Http\Requests\V1\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class StoreAuthorRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'bio' => 'required|string',
        ];
    }
}
