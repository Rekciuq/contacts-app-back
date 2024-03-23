<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
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
        $method = $this->method();

        if($method == 'PUT') {
        return [
            'name' => ['required']
        ];
        } else {
        return [
            'name' => ['sometimes', 'required'],
        ];
        }
    }

    protected function prepareForValidation()
    {
        if($this->phoneNumber) {
        $this->merge([
            'phone_number' => $this->phoneNumber
        ]);
        }

        if($this->dateOfBirth) {
        $this->merge([
            'date_of_birth' => $this->dateOfBirth
        ]);
        }
    }
}
