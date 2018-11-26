<?php

namespace App\Http\Requests\Authentic;

use Illuminate\Foundation\Http\FormRequest;

class SingUpFormRequest extends FormRequest
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
            'civility'    => ['required', 'in:madame,monsieur'],
            'name'        => ['required', 'string', 'max:255'],
            'surname'     => ['required', 'string', 'max:255'],
            'email'       => ['required', 'email', 'string', 'unique:users'],
            'password'    => ['required', 'alphanum', 'min:8', 'confirmed'],
            'news'        => ['in:0,1'],
            'partner'     => ['in:0,1'],
        ];
    }
}
