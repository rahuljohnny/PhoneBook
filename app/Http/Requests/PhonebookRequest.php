<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PhonebookRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            //'name' => 'required|max:255',
            //'phone' => 'required|regex:/(01)[0-9]{9}/',
            //'phone' => 'required|numeric|phone_number|size:11'
            //'email' => 'required|email|unique:phonebooks,email,'.$request->id,
            //'email' => 'required|email|unique:phonebooks,email,'.$request->id
        ];
    }
}
