<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'name'=>'required',
            'category_id'=>'required',
            'post_image'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter image title',
            'category_id.required' => 'Please select category',
            'category_id.numeric' => 'Please provide valid category id',
            'post_image.required' => 'Please provide image of product',
        ];
    }
}
