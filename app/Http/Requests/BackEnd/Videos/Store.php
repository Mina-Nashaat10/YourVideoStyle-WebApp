<?php

namespace App\Http\Requests\BackEnd\Videos;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
            
            
            'name' => 'required|string|max:255',
            'des' => 'required|max:255',            
           // "Link"=>'required|url',
            "publish"=>'required',
            "Category_id"=>'required',
            "image"=>"required|image"
            
        ];
    }
}
