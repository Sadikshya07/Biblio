<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostAdRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'Image' => 'required|image|max:2048',
            'BookName' => 'required',
            'SellerName' => 'required',
            'ContactNo' => 'required|digits:10',
            'Price' => 'required|numeric',
            'Category' => 'required',
            'Condition' => 'required'
        ];
        return $rules;
    }
}