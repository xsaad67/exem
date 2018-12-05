<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:2', 
            'description' =>  function($attribute, $value, $fail) use ($minDesc) {
                               if(strlen(strip_tags($value)) < $minDesc){
                                    return $fail('Post content must be greater than '.$minDesc);
                                }
                            },    
        ];
    }
}
