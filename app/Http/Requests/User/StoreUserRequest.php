<?php

namespace App\Http\Requests\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('create', User::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'organization_id' => ['required', 'exists:organizations,id'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:255','unique:users,phone'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['string', 'min:8', 'confirmed'],
            'workdetails' => ['required', 'string', 'max:255'],
            'workdescription' => ['required', 'string', 'max:255'],
            'worklocation' => ['required', 'string', 'max:255'],
        ];
    }
}
