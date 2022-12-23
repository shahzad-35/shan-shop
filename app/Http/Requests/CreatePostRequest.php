<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title' => 'required',
            'category_id' => 'required|numeric',
            'post_image' => 'required| mimes:jpeg,jpg,png|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please enter image title',
            'category_id.required' => 'Please select category',
            'category_id.numeric' => 'Please provide valid category id',
            'post_image.required' => 'Please provide image of product',
            'post_image.mime' => 'You can upload only jpeg,jpg or png images',
            'post_image.max' => 'Your images must be less than 2MB size',
        ];
    }
}
