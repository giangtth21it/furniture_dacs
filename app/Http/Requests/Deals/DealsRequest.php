<?php

namespace App\Http\Requests\Deals;

use Illuminate\Foundation\Http\FormRequest;

class DealsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=> 'required',
            'days' => 'required|min:0',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please enter the deal\'s name',
        ];
    }
}