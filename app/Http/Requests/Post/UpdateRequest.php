<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'integer'],
            'content' => ['required', 'string'],
            'author' => ['required', 'string', 'min:2', 'max:255'],
            'image' => ['required', 'file', 'mimes:png,jpg,jpeg,svg'],
            'published' => ['nullable'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'category_id.required' => 'The category field is required.',
            'content.required' =>'The content field is required.',
            'author.required' => 'The image must be a file of type: png, jpg, jpeg.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: png, jpg, jpeg.',
        ];
    }

}
