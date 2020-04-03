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
            'product_name' => ['required'],
            'description' => ['required'],
            'brand' => ['required'],
            'category' => ['required'],
            'quantity' =>['required','numeric'],
            'sku' => ['required','numeric'],
            'product_file.*' => ['required','file','image','mimes:jpeg,png,gif,webp','max:5048'],
            'product_file' =>['required']
        ];
    }
    public function messages()
    {
        return [
            'product_name.required' => 'Product name is required',
            'description.required' => 'Product description is required',
            'brand.required' => 'Product brand is required',
            'category.required' => 'Select a category product belongs to',
            'quantity.required' => 'Product quantity is required',
            'quantity.numeric' => 'Product quantity must be value(number)',
            'sku.required' => 'Product Sku No is required',
            'sku.numeric' => 'Product Sku No must be value(number)',
            'product_file.*.required' => 'Product must have an image',
            'product_file.required' => 'Product must have an image',
            'product_file.*.max' => 'Image must be less than 5MB',
            'product_file.*.mimes' => 'Image format must match with any of these(jpeg,png,gif,webp)',

        ];
    }
}
