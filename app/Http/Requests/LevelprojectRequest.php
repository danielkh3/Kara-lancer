<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LevelprojectRequest extends FormRequest
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
            'day' => 'required',
            'price' => 'required',
            'detail' => 'required',
            'detail_employer' => 'required',
            'detail_lancer' => 'required',
        ];
    }
}
