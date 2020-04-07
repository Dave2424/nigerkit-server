<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'description' => ['required'],
            'brand' => ['required'],
            'price' => ['required','numeric'],
            'category_id' => ['required'],
            'quantity' =>['required','numeric'],
            'content' => ['nullable'],
            'Sku' => ['required'],
//            'files' => 'required|mimes:jpg,jpeg,png,bmp,gif|max:5048',
            'files.*' => 'required|mimes:jpg,jpeg,png,bmp,gif|max:5048',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Product name is required',
            'description.required' => 'Product description is required',
            'brand.required' => 'Product brand is required',
            'price.required' => 'Product brand is required',
            'price.numeric' => 'Product price must be value(number)',
            'category_id.required' => 'Select a category product belongs to',
            'quantity.required' => 'Product quantity is required',
            'quantity.numeric' => 'Product quantity must be value(number)',
            'Sku.required' => 'Product Sku No is required',
            'files.*.required' => 'Please upload an image',
            'files.*.mimes' => 'Only jpeg,png,gif and bmp images are allowed',
            'files.*.max' => 'Sorry! Maximum allowed size for an image is 5MB',
        ];
    }
}
