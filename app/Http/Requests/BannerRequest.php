<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'files' => 'required|mimes:jpg,jpeg,png,bmp,gif|max:5000000',
            'details' =>'required'
        ];
    }
    public function messages()
    {
        return [
            'files.required' => 'Please upload an image',
            'files.mimes' => 'Only jpeg,png,gif and bmp images are allowed',
            'files.max' => 'Sorry! Maximum allowed size for an image is 5MB',
            'details.required' => 'Image banner details is required'
        ];
    }
}
