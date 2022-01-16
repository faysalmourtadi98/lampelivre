<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class product_request extends FormRequest
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
        'product_name'=>'required| string| max:255',
        'product_prix'=>'required| string| max:255',
        'product_devise'=>'required| string| max:255',
        'product_description'=>'required| string',
        'product_auteur'=>'required| string| max:255',
        'product_in_stock'=>'required| string| max:255',
        'product_image'=>'mimes:jpeg,bmp,png',
        ];
    }
}
