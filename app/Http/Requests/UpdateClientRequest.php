<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UpdateClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:255'],
            'address' => ['required', 'max:255'],
            'siret' => ['required', 'max:255'],
            'ref' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'max:255'],
        ];
    }
}
