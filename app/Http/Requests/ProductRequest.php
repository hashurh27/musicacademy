<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
   public function rules()
{
    return [
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255', // Ensure the slug field is present and required
        'summary' => 'required|string',
        'description' => 'required|string',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'stock' => 'required|integer|min:0',
        'price' => 'required|numeric|min:0',
        'discount' => 'required|numeric|min:0',
    ];
}

}
